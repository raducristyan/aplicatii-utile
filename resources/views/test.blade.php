@extends('layout.master')
@php
dd(session()->get('flash'))
// dd(session()->get('flash_alert') !== null)
// dd(auth()->user()->institution->with('users')->get());
// dd(auth()->user()->isAdmin());
// dd(auth()->user()->institution()->first()->users->contains(4));
@endphp