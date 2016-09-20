searchInput = $('#searchInput')
engine = new Bloodhound(
  remote:
    url: '/users/search'
    prepare: prepareRequest
    transform: (response) -> response.data
  queryTokenizer: Bloodhound.tokenizers.whitespace
  datumTokenizer: Bloodhound.tokenizers.whitespace
)

engine.initialize()
searchInput.typeahead(typeahead: [null, { source: engine.ttAdapter() }])

prepareRequest = (query, settings) ->
  settings.method = 'get'
  settings.data = q: searchInput.val()