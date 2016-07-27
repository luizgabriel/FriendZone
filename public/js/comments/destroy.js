var CommentsController = CommentsController || {};
CommentsController.destroy = function (id)
{
  return $.post('/comments/' + id, { _method: 'DELETE' });
}

CommentsController.addDestroyEvents = function (comment)
{
  comment.find('.destroy-comment-btn')
  .click(function (e) {
    e.preventDefault();
    var id = comment.data('id');

    BootstrapDialog.confirm({
        title: 'Excluir comentário',
        message: 'Deseja realmente excluir o comentário?',
        type: BootstrapDialog.TYPE_DANGER,
        callback: function (result) {
          if (result) {
            CommentsController.destroy(id).done(function () {
              comment.slideUp('slow');
            });
          }
        }
    });

  });
}

$(document).ready(function () {

  $('.box-comment').each(function () {
    CommentsController.addDestroyEvents($(this));
  });

});
