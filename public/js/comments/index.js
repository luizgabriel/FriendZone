var CommentsController = CommentsController || {}

CommentsController.getComments = function (postId, pageSize, page)
{
    return $.get('/posts/' + postId + '/comments', {page: page, page_size: pageSize});
}

CommentsController.addShowMoreEvents = function (post)
{
  post.find('.show-more-comments-btn')
  .click(function (e) {
    e.preventDefault();

    var currentPage = parseInt(post.data('current-page'));
    var postId = parseInt(post.data('post-id'));
    var page = currentPage + 1;
    var pageSize = 2;
    var commentsCounter = post.find('.comments-count');

    post.data('current-page', page);

    CommentsController.getComments(post.data('post-id'), pageSize, page).done(function (commentsView) {
        var comments = $('<div>' + commentsView + '<div/>').find('.box-comment');
        post.find('.box-comments').append(comments);
        comments.each(function () {
            CommentsController.addDestroyEvents($(this));
        });

        commentsCounter.html(parseInt(commentsCounter.html()) + comments.length);
      });
  });
}

$(document).ready(function () {
  $('[data-post-id]').each(function () {
    CommentsController.addShowMoreEvents($(this));
  });
});
