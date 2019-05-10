@extends('layouts.karma');
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <body>  
        <div class="container">
        <div class="card-header" style="color: black; font-size: 20px" >Tìm thấy: {{count($product)}} sản phẩm</div>
        <table class="table">
        <thead>
            <tr>
                <th>Tên</th>
                <th>Hình ảnh</th>
                <th>Loại sản phẩm</th>
                <th>Đánh giá</th>
                <th>Giá</th>
                <th>Chi tiết</th>
            </tr>
        </thead>
        @foreach($product as $p)
        <tbody>
            <tr>
            <th><?php echo $p["name"];?></th>
            <th><img width="100" height="100" src="<?php echo $p->img_link; ?>" /></th>
            <th><?php echo $p->catalog->name?></th>
            <th><?php echo $p->star; ?></th>
            <th><?php echo (int)$p->price; ?> {{" VND"}} </th>
            <th><a role="button" href="{{route('product',$p->id)}}" class="lnr lnr-enter" style="border: none; background: none;"  title="Product"></a></th>
            </tr>
            </tr>
        </tbody>
        @endforeach
        </table>
        </div>
    </body>
</html>
