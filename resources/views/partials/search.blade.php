<algolia-autocomplete app-id="P53SZUIML8" api-key="19f54cccab5efbeb0d351b307326a864" index-name="products" ></algolia-autocomplete>

<form action="{{ route('search') }}" method="GET" class="search-form">
    <i class="fa fa-search search-icon"></i>
    <input type="text" name="query" id="query" value="{{ request()->input('query') }}" class="search-box" placeholder="Search for product" required>
</form>
