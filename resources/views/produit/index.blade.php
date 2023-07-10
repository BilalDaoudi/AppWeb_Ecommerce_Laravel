@extends('layouts.app')

@section('content')

<div class="row m-2">
    <div class="col-3">
        <h4>Liste des produits</h4>
    </div>

    <div class="col-6">
        @if(session('success'))
        <div class="alert alert-info">
            {{ session('success') }}
        </div>
        @endif
    </div>
    <div class="col-3 text-end">
        <a href="{{ route('produits.create') }}" class="btn btn-primary"><span class="bi bi-plus"></span> Ajouter un produit</a>
    </div>
</div>

@if(count($produits) > 0)

<div class="row">

    @foreach ($produits as $produit)

    <div class="col-4 card mt-4" style="width: 18rem; margin-left:25px">
        <img src="{{ asset($produit->image) }}" class="card-img-top" alt="..." width="200px" height="250px">
        <div class="card-body">
            <h5 class="card-title">{{ $produit->prix }} DH</h5>
            <p class="card-text">{{ $produit->codeproduit }}</p>
            <p class="card-text">{{ $produit->description }}</p>
        </div>
        <div class="card-footer flex-container text-end">
            <a href="{{ route('produits.edit', $produit ) }}" class="btn btn-sm  btn-primary"><span class="bi bi-pencil"></span></a>
            <form action="{{ route('produits.destroy', $produit ) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm  btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette Produit ?')"><span class="bi bi-trash"></span></button>
            </form>
        </div>
    </div>
    @endforeach


</div>

<div class="m-4">
    {{$produits->links()}}
</div>
@else
<div class="alert alert-danger text-center fw-bold">
    N'est aucun produit
</div>
@endif
@endsection