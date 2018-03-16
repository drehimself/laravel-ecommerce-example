@extends('layout')

@section('title', 'Search Results Algolia')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.js@2.6.0/dist/instantsearch.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.js@2.6.0/dist/instantsearch-theme-algolia.min.css">
@endsection

@section('content')

    @component('components.breadcrumbs')
        <a href="/">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Search</span>
    @endcomponent

    <div class="container">
        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="container">


        <ais-index app-id="P53SZUIML8" api-key="19f54cccab5efbeb0d351b307326a864" index-name="products">
        <div class="search-results-container-algolia">
            <div>
                <h2>Search</h2>
                <ais-search-box></ais-search-box>

                <ais-stats></ais-stats>

                <div class="spacer"></div>
                <h2>Categories</h2>
                <ais-refinement-list attribute-name="categories" :sort-by="['name:asc']"></ais-refinement-list>
            </div>

            <div>
                <ais-results>
                    <template slot-scope="{ result }">
                        <div>
                            <a :href="`/shop/${result.slug}`">
                                <div class="instantsearch-result">
                                    <div>
                                        <img :src="`/storage/${result.image}`" alt="img" class="algolia-thumb-result">
                                    </div>
                                    <div>
                                        <div class="result-title">
                                            <ais-highlight :result="result" attribute-name="name"></ais-highlight>
                                        </div>
                                        <div class="result-details">
                                            <ais-highlight :result="result" attribute-name="details"></ais-highlight>
                                        </div>
                                        <div class="result-price">
                                            $@{{ (result.price / 100).toFixed(2) }}
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <hr>
                        </div>
                    </template>
                </ais-results>
                <ais-pagination></ais-pagination>
            </div>
        </div> <!-- end search-results-container-algolia -->
        </ais-index>
    </div> <!-- end container -->

@endsection

@section('extra-js')
    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    {{--  <script src="{{ asset('js/algolia.js') }}"></script>  --}}
    <script src="https://cdn.jsdelivr.net/npm/instantsearch.js@2.6.0"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    {{--  <script src="{{ asset('js/algolia-instantsearch.js') }}"></script>  --}}
@endsection
