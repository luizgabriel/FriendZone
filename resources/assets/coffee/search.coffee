prepareRequest = (query, settings) ->
  settings.method = 'get'
  settings.data = q: query
  console.log(settings)

  searchInput = $('#searchInput')
  users = new Bloodhound(
    remote:
      url: '/users/search'
      prepare: prepareRequest
      transform: (response) -> response.data
    queryTokenizer: Bloodhound.tokenizers.whitespace
    datumTokenizer: Bloodhound.tokenizers.whitespace
  )

  searchInput.typeahead(null, { source: users })
