<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('htmlDaSematron.inicio'))->name('home');

Route::get('/inicio', fn () => view('htmlDaSematron.inicio'))->name('inicio');

Route::get('/inscricoes', fn () => view('htmlDaSematron.inscricoes'))->name('inscricoes');

Route::get('/minicursos', fn () => view('htmlDaSematron.minicursos'))->name('minicursos');

Route::get('/visitas', fn () => view('htmlDaSematron.visitas'))->name('visitas');

Route::get('/login', fn () => view('htmlDaSematron.login'))->name('login');

Route::get('/cadastro', fn () => view('htmlDaSematron.cadastro'))->name('cadastro');

Route::get('/maisSematron', fn () => view('htmlDaSematron.maisSematron'))->name('maisSematron');

Route::get('/contato', fn () => view('htmlDaSematron.contato'))->name('contato');
