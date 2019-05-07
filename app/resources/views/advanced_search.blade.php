@extends('layouts.karma');
<!doctype html>
@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<br>
<br>
<br>        
<br>   
<br>
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="color: black; font-size: 30px; text-shadow: 1px 1px orange;" >Tìm kiếm nâng cao</div>
                <div class="card-body">
                    <form method="POST" onsubmit="return max_min_compare();" action="{{ route('search_result') }}">
                        <!-- search input -->
                        <div class="form-group row">
                            <label for="search" class="col-md-4 col-form-label text-md-right">{{ __('Tìm kiếm') }}</label>
                            <div class="col-md-6">
                                <input id="search_input" type="text" class="form-control" name="search_input" required>
                            </div>
                        </div>
                        <!-- price input -->
                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Tầm giá') }}</label>
                            <div class="col-md-6">
                                <input id="min_price" type="number" onkeypress="return event.charCode >= 48" min="0" max="10000000" class="form-control" placeholder="MIN" name="min_price">
                                <input id="max_price" type="number" onkeypress="return event.charCode >= 48" min="0" max="10000000" class="form-control @error('max_price') is-invalid @enderror" placeholder="MAX" name="max_price">
                                @error('max_price')
                                @enderror
                            </div>
                        </div>
                        <!-- catalog select -->
                        <div class="form-group row mb-0">
                        <label for="catalog" class="col-md-4 col-form-label text-md-right">{{ __('Loại sản phẩm') }}</label>
                            <div class="col-md-6">
                                <select name="catalog">
                                    <option value="" selected="selected">--Chọn loại sản phẩm--</option>
                                </select>
                            </div>
                        </div>  
                        <!-- brand select -->
                        <div class="form-group row mb-0">
                        <label for="brand" class="col-md-4 col-form-label text-md-right">{{ __('Hãng sản xuất') }}</label>
                            <div class="col-md-6">
                                <select name="brand">
                                    <option value="" selected="selected">--Chọn hãng sản xuất--</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <!-- submit -->    
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-5">
                                <button name="submit" type="submit" style="background-color:orange; position: relative;" class="btn btn-primary">
                                    {{ __('Tìm kiếm') }}
                                </button>                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</html>
@endsection