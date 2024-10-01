<?php

$routes['default_controller'] = 'home';


$routes['san-pham'] = 'product/index';
$routes['trang-chu'] = 'home';
$routes['tin-tuc/(.+)'] = 'news/category/$1';
$routes['tin-tuc/.+-(\d+).html'] = 'news/tin/$1';  ///tin-tuc/thetho-1.html
$routes['xep-hang/.+-(\d+).html'] = 'admin/auth/dashboard/new/$1';  ///tin-tuc/thetho-1.html



$routes['trang-chu.html'] = 'home';
$routes['dang-nhap.html'] = 'account/login';
$routes['dang-ki.html'] = 'account/register';
$routes['quen-mat-khau.html'] = 'account/forgot';
$routes['dat-lai-mat-khau.html'] = "account/reset";


//ADMIN
//--USER
$routes['quan-ly.html'] = 'admin/dashboard';
$routes['quan-ly-tai-khoan.html'] = 'admin/users';
$routes['them-tai-khoan.html'] = 'admin/users/addNewStaff';
$routes['cap-nhat-tai-khoan-(.+).html'] = 'admin/users/updateStaff/$1';
$routes['xoa-tai-khoan.html'] = 'admin/users/deleteStaff';
$routes['danh-sach-thanh-vien.html'] = 'admin/users/listMembers';
//--Cinema
$routes['quan-ly-rap-phim.html'] = 'admin/cinemas';
$routes['them-rap-phim.html'] = 'admin/cinemas/addNewCinema';
$routes['cap-nhat-rap-phim-(.+).html'] = 'admin/cinemas/updateCinema/$1';
$routes['xoa-rap-phim.html'] = 'admin/cinemas/deleteCinema';
$routes['them-phong-chieu.html'] = 'admin/cinemas/addNewRoomForCinema';
$routes['cap-nhat-phong-chieu-(.+).html'] = 'admin/cinemas/updateRoomForCinema/$1';
$routes['xoa-phong-chieu.html'] = 'admin/cinemas/deleteRooomForCinema';
//Movies
$routes['quan-ly-phim.html'] = 'admin/movies';
$routes['them-bo-phim.html'] = 'admin/movies/addNewMovie';
$routes['cap-nhat-phim-(.+).html'] = 'admin/movies/updateMovie/$1';
$routes['xoa-bo-phim.html'] = 'admin/movies/deleteMovie';

$routes['them-suat-chieu.html'] = 'admin/Showtime/addShowTime';






