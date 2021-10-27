@extends('layouts.app')

@section('title', $article->name)
@section('header', $article->name)
@section('content', $article->body)