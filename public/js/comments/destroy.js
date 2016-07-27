$(document).ready(function () {

  $('.destroy-comment-btn').click(function (e) {
    e.preventDefault();
    var comment = $(this).closest('.box-comment');
    var id = comment.data('id');

    $.post('/comments/' + id, { _method: 'DELETE' })
      .done(function () {
        comment.hide();
      });

  });

});
