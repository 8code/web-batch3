<?php
   // get All Komentar
   Route::get('/komentars', "Api\komentarController@getKomentars");
   // Get Reply
   Route::get('/reply/{id}', "Api\komentarController@getKomentar");
   // Tambah Komentar
   Route::post("/tambah-komentar","Api\komentarController@tambahKomentar");
   // Edit Komentar
   Route::post("/edit-komentar/{id}","Api\komentarController@editKomentar");
   // Hapus Komentar
   Route::get("/hapus-komentar/{id}","Api\komentarController@hapusKomentar");

   ?>