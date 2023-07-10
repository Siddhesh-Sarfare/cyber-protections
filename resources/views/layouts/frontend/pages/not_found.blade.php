@extends('layouts.frontend.master')

@section('title')
Page Not Found
@endsection

@section('page-content')
<style class="automa-element-selector">
    @font-face {
      font-family: "Inter var";
      font-weight: 100 900;
      font-display: swap;
      font-style: normal;
      font-named-instance: "Regular";
      src: url("chrome-extension://infppggnoaenmfagbfknfkancpbljcca/Inter-roman-latin.var.woff2") format("woff2")
    }

    .automa-element-selector {
      direction: ltr
    }

    [automa-isDragging] {
      user-select: none
    }

    [automa-el-list] {
      outline: 2px dashed #6366f1;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
    }

    .error-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 88vh;
      text-align: center;
    }

    h1 {
      font-size: 6rem;
      margin-bottom: 1rem;
      color: #333;
    }

    h2 {
      font-size: 2rem;
      margin-bottom: 1.5rem;
      color: #666;
    }

    p {
      font-size: 1.2rem;
      margin-bottom: 2rem;
      color: #888;
    }

    .button {
      display: inline-block;
      padding: 1rem 2rem;
      background-color: #333;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    .button:hover {
      background-color: #666;
    }
  </style>
<main class="main">
  <div class="error-container">
    <h1>404</h1>
    <h2>Oops! Page not found</h2>
    <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
    <a href="{{ route('home') }}" class="button">Go back to homepage</a>
  </div>
</main>


@endsection