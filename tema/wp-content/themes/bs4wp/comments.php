<?php if (is_single() || is_page()) : ?>
  <?php
  $comments_params = [
    'title_reply' => 'Escreva sua resposta',
    'title_reply_before' => '<h6 id="reply-title" class="comment-reply-title mt-4">',
    'title_reply_after' => '</h6>',
    'class_submit' => 'btn btn-primary',
    'comment_notes_before' => '<p>Seu email não será publicado.</p>',
    'fields' => apply_filters(
      'comment_form_default_fields',
      [
        'author' => '<div class="row">' .
          '<div class="col-md-6 col-12">' .
          '<div class="form-group">' .
          '<label class="control-label" for="author">' . __('Seu nome') . '</label>' .
          ($req ? '<span>*</span>' : '') .
          '<input id="author" class="form-control" name="author" value="' . esc_attr($commenter['comment_author']) . '" ' . $aria_req . '/>' .
          '</div>' .
          '</div>',
        'email' =>  '<div class="col-md-6 col-12">' .
          '<div class="form-group">' .
          '<label class="control-label" for="email">' . __('Seu e-mail') . '</label>' .
          ($req ? '<span>*</span>' : '') .
          '<input class="form-control" id="email" name="email" type="email" value="' . esc_attr($commenter['comment_author_email']) . '" ' . $aria_req . '/>' .
          '</div>' .
          '</div></div>',
      ]
    ),
    'comment_field' =>  '<p>' .
      '<textarea id="comment" class="form-control" placeholder="Sua mensagem... " name="comment" rows="3" aria-required="true"></textarea>' .
      '</p>',
    'comment_notes_after' => ''
  ];
  ?>
  <div class="blog-comments">
    <?php if (have_comments() && comments_open()) : ?>
      <h5 id="comments" class="mb-3">
        <?php comments_number(__('comentários'), __('1 comentário'), '%' . __(' comentários')) ?>
      </h5>

      <div class="list-unlysted">
        <?php
        wp_list_comments([
          'style' => 'div',
          'type' => 'comment',
          'callback' => 'format_comment'
        ]);
        ?>
      </div>

      <?php comment_form($comments_params); ?>

      <?php else : if (comments_open()) : ?>
        <?php comment_form($comments_params); ?>
    <?php endif;
      endif; ?>
  </div>
<?php endif ?>