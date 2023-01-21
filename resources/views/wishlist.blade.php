@extends('layouts.app')

@section('title')
    <title>Wishlist</title>
@endsection

@section('content')
    <div class="page-section section" style="padding-top: 100px; padding-bottom: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <!--=======  cart table  =======-->

                        <div class="cart-table table-responsive">
                            <table class="table">
                                @if ($wishes->count() > 0)
                                    <thead>
                                        <tr>
                                            <th class="pro-thumbnail">Image</th>
                                            <th class="pro-title">Product</th>
                                            <th class="pro-price">Price</th>
                                            <th class="pro-remove">Remove</th>
                                        </tr>
                                    </thead>
                                @endif
                                <tbody>
                                    @forelse ($products as $product)
                                        @if (in_array(
                                            $product->id,
                                            \Auth::user()->wishlist->pluck('product_id')->toArray()))
                                            <tr>
                                                <td class="pro-thumbnail"><a
                                                        href="{{ route('singleproduct', $product->id) }}"><img
                                                            src="{{ $product->getImage() }}" style="max-height: 150px;"
                                                            class="img-fluid" alt="Product"></a></td>
                                                <td class="pro-title"><a
                                                        href="{{ route('singleproduct', $product->id) }}">{{ $product->name_uz }}</a>
                                                </td>
                                                <td class="pro-price"><span>{{ $product->price }} sum</span></td>
                                                <td class="pro-remove">
                                                    <form action="{{ route('wishes.delete', $product->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <button type="submit"><i class="fa fa-trash-o"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endif

                                    @empty
                                        <p class="text-left alert alert-dark">Hech narsa topilmadi</p>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>

                        <!--=======  End of cart table  =======-->

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
