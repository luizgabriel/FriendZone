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
    var onComplete = function (commentView) {
      var comment = $(commentView);
      var commentsCounter = form.closest('.box').find('.comments-count');
      var commentsTotal = form.closest('.box').find('.comments-total');
      var commentsBox = form.closest('.box').find('.box-comments');

      commentsBox.append(comment);
      commentsCounter.html(parseInt(commentsCounter.html()) + 1);
      commentsTotal.html(parseInt(commentsTotal.html()) + 1);

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
