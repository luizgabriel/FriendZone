var CommentsController = CommentsController || {};
CommentsController.store = function (data)
{
    return $.post('/comments', data);
}

CommentsController.addStoreEvents = function (form)
{
  form.submit(function (event) {
    event.preventDefault();

    var input = form.find('[name=content]');
    var onComplete = function (comment_view) {
      var comment = $(comment_view);
      var commentsBox = form.closest('.box').find('.box-comments');
      commentsBox.append(comment);
      CommentsController.addDestroyEvents(comment);
      input.val('');
    }

    if(input.val() != "")
      CommentsController.store(form.serializeArray()).done(onComplete);

  });
}

$(document).ready(function () {
  $('.comments-store-form').each(function () {
    CommentsController.addStoreEvents($(this));
  });
});
