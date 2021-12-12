$(function(){
  $('.delete_btn').on('click', function(){     /* jQueryで、要素がクリックされたときのイベント処理 */
    var Id = $(this).data('id');  /* data-idに入っている値を取得する方法を考えよう */

    if(confirm("タスクを完了してよいでしょうか？")){
      /* ==========AJAX通信================= */
      $.ajaxSetup({
        /* headerにCSRF-TOKENがあるので、合致しているかを確認しましょう */
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        type:'POST',   /*POSTタイプで受信します。*/
        url: '/delete',   /*メソッド先*/
        data: {
          id: Id
        }
      }).done(function(){
         location.reload();  /* 削除が成功したらブラウザをリロードさせよう */
      }).fail(function(XMLHttpRequest, textStatus, errorThrown){
         console.log(XMLHttpRequest.status);
         console.log(textStatus);
         console.log(errorThrown);
      });
      /* ==========/AJAX通信================= */
    }

  });
});
