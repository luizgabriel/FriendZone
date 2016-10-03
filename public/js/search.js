(function() {
  var prepareRequest;

  prepareRequest = function(query, settings) {
    var searchInput, users;
    settings.method = 'get';
    settings.data = {
      q: query
    };
    console.log(settings);
    searchInput = $('#searchInput');
    users = new Bloodhound({
      remote: {
        url: '/users/search',
        prepare: prepareRequest,
        transform: function(response) {
          return response.data;
        }
      },
      queryTokenizer: Bloodhound.tokenizers.whitespace,
      datumTokenizer: Bloodhound.tokenizers.whitespace
    });
    return searchInput.typeahead(null, {
      source: users
    });
  };

}).call(this);

//# sourceMappingURL=search.js.map
