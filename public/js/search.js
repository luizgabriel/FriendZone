(function() {
  var engine, prepareRequest, searchInput;

  searchInput = $('#searchInput');

  engine = new Bloodhound({
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

  engine.initialize();

  searchInput.typeahead({
    typeahead: [
      null, {
        source: engine.ttAdapter()
      }
    ]
  });

  prepareRequest = function(query, settings) {
    settings.method = 'get';
    return settings.data = {
      q: searchInput.val()
    };
  };

}).call(this);

//# sourceMappingURL=search.js.map
