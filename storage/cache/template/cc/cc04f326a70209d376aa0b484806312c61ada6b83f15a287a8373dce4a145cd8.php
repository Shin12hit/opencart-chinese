<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* marketplace/marketplace_info.twig */
class __TwigTemplate_fa8e15cafd8580b22fa355d2092d399ab1a5c40cb0c8916566eba747a15beca9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-right\">

        ";
        // line 7
        if ( !($context["error_signature"] ?? null)) {
            // line 8
            echo "          <button type=\"button\" id=\"button-opencart\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_opencart"] ?? null);
            echo "\" class=\"btn btn-info\"><i class=\"fas fa-cog\"></i></button>
        ";
        } else {
            // line 10
            echo "          <button type=\"button\" id=\"button-opencart\" data-toggle=\"tooltip\" title=\"";
            echo ($context["error_signature"] ?? null);
            echo "\" data-placement=\"left\" class=\"btn btn-danger\"><i class=\"fas fa-exclamation-triangle\"></i></button>
        ";
        }
        // line 12
        echo "
        <a href=\"";
        // line 13
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-reply\"></i></a>

      </div>
      <h1>";
        // line 16
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 19
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 19);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 19);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "      </ol>
    </div>
  </div>
  <div id=\"marketplace-extension-info\" class=\"container-fluid\">
    ";
        // line 25
        if (($context["error_warning"] ?? null)) {
            // line 26
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 30
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-puzzle-piece\"></i> ";
        // line 31
        echo ($context["name"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <div class=\"row extension-info\">
          <div class=\"col-md-8 col-lg-9\">
            ";
        // line 35
        if (($context["banner"] ?? null)) {
            // line 36
            echo "              <div id=\"banner\" class=\"text-center img-thumbnail mb-3\"><img src=\"";
            echo ($context["banner"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-fluid\"/></div>
            ";
        }
        // line 38
        echo "            <div class=\"row thumbnails\">
              ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 40
            echo "                <div class=\"col-4 col-md-3 col-lg-2 mb-3\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 40);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 40);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 40);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 40);
            echo "\" class=\"img-fluid img-thumbnail\"/></a></div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </div>
            <ul class=\"nav nav-tabs\">
              <li class=\"nav-item\"><a href=\"#tab-description\" class=\"nav-link active\" data-toggle=\"tab\">";
        // line 44
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
              <li class=\"nav-item\"><a href=\"#tab-documentation\" class=\"nav-link\" data-toggle=\"tab\">";
        // line 45
        echo ($context["tab_documentation"] ?? null);
        echo "</a></li>
              <li class=\"nav-item\"><a href=\"#tab-download\" class=\"nav-link\" data-toggle=\"tab\">";
        // line 46
        echo ($context["tab_download"] ?? null);
        echo "</a></li>
              <li class=\"nav-item\"><a href=\"#tab-comment\" class=\"nav-link\" data-toggle=\"tab\">";
        // line 47
        echo ($context["tab_comment"] ?? null);
        echo " (";
        echo ($context["comment_total"] ?? null);
        echo ")</a></li>
            </ul>
            <div class=\"tab-content\">
              <div id=\"tab-description\" class=\"tab-pane fade show active\">";
        // line 50
        echo ($context["description"] ?? null);
        echo "</div>
              <div id=\"tab-documentation\" class=\"tab-pane fade\">";
        // line 51
        echo ($context["documentation"] ?? null);
        echo "</div>
              <div id=\"tab-download\" class=\"tab-pane fade\">
                <fieldset>
                  <legend>";
        // line 54
        echo ($context["text_available"] ?? null);
        echo "</legend>
                  <div id=\"download\"></div>
                </fieldset>
              </div>
              <div id=\"tab-comment\" class=\"tab-pane\">
                <fieldset>
                  <legend>";
        // line 60
        echo ($context["text_comment_add"] ?? null);
        echo "</legend>
                  <div class=\"form-group\">
                    <textarea name=\"comment\" rows=\"5\" placeholder=\"";
        // line 62
        echo ($context["text_write"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\"></textarea>
                  </div>
                  <div class=\"text-right\">
                    <button type=\"button\" id=\"button-comment\" class=\"btn btn-primary\">";
        // line 65
        echo ($context["button_comment"] ?? null);
        echo "</button>
                  </div>
                </fieldset>
                <br/>
                <fieldset>
                  <legend>";
        // line 70
        echo ($context["text_comment"] ?? null);
        echo "</legend>
                  <div id=\"comment\"></div>
                </fieldset>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 col-lg-3\">
            <div id=\"buy\" class=\"card mb-3\">
              <div class=\"card-body\">
                ";
        // line 79
        if (((0 === twig_compare(($context["license"] ?? null), "1")) &&  !($context["purchased"] ?? null))) {
            // line 80
            echo "                  <button id=\"button-buy\" class=\"btn btn-success btn-lg btn-block\">";
            echo ($context["button_purchase"] ?? null);
            echo "</button>
                ";
        }
        // line 82
        echo "                <div id=\"price\" class=\"row\">
                  <div class=\"col-lg-5\"><strong>";
        // line 83
        echo ($context["text_price"] ?? null);
        echo "</strong></div>
                  <div class=\"col-lg-7 text-right\">";
        // line 84
        if (($context["license"] ?? null)) {
            // line 85
            echo "                      ";
            echo ($context["price"] ?? null);
            echo "
                    ";
        } else {
            // line 87
            echo "                      ";
            echo ($context["text_free"] ?? null);
            echo "
                    ";
        }
        // line 89
        echo "                  </div>
                </div>
                <hr>
                <ul class=\"list-check\">
                  <li>";
        // line 93
        echo ($context["text_partner"] ?? null);
        echo "</li>
                  <li>";
        // line 94
        echo ($context["text_support"] ?? null);
        echo "</li>
                  <li>";
        // line 95
        echo ($context["text_documentation"] ?? null);
        echo "</li>
                </ul>
                <hr>
                <div class=\"row\">
                  <div class=\"col-md-5\"><strong>";
        // line 99
        echo ($context["text_rating"] ?? null);
        echo "</strong></div>
                  <div class=\"col-md-7 text-right\">";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 101
            echo "                      ";
            if ((0 <= twig_compare(($context["rating"] ?? null), $context["i"]))) {
                echo "<i class=\"fas fa-star\"></i>";
            } else {
                echo "<i class=\"fas fa-star-o\"></i>";
            }
            // line 102
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " (";
        echo ($context["rating_total"] ?? null);
        echo ")
                  </div>
                </div>
                <hr>
                <div class=\"row\">
                  <div class=\"col-md-5\"><strong>";
        // line 107
        echo ($context["text_date_modified"] ?? null);
        echo "</strong></div>
                  <div class=\"col-md-7 text-right\">";
        // line 108
        echo ($context["date_modified"] ?? null);
        echo "</div>
                </div>
                <hr>
                <div class=\"row\">
                  <div class=\"col-md-5\"><strong>";
        // line 112
        echo ($context["text_date_added"] ?? null);
        echo "</strong></div>
                  <div class=\"col-md-7 text-right\">";
        // line 113
        echo ($context["date_added"] ?? null);
        echo "</div>
                </div>
              </div>
            </div>
            <div id=\"sales\" class=\"card mb-3\">
              <div class=\"card-body\"><i class=\"fas fa-shopping-cart\"></i> <strong>";
        // line 118
        echo ($context["sales"] ?? null);
        echo "</strong> ";
        echo ($context["text_sales"] ?? null);
        echo "</div>
            </div>
            <div id=\"sales\" class=\"card mb-3\">
              <div class=\"card-body\"><i class=\"fas fa-download\"></i> <strong>";
        // line 121
        echo ($context["downloaded"] ?? null);
        echo "</strong> ";
        echo ($context["text_downloaded"] ?? null);
        echo "</div>
            </div>
            <div class=\"card mb-3\">
              <div class=\"card-body\">
                <div class=\"media\">
                  <img src=\"";
        // line 126
        echo ($context["member_image"] ?? null);
        echo "\" alt=\"";
        echo ($context["member_username"] ?? null);
        echo "\" title=\"";
        echo ($context["member_username"] ?? null);
        echo "\" class=\"mr-3 rounded-circle\">
                  <div class=\"media-body\">
                    <h5 class=\"mt-0\"><a href=\"";
        // line 128
        echo ($context["filter_member"] ?? null);
        echo "\">";
        echo ($context["member_username"] ?? null);
        echo "</a></h5>
                    <small>";
        // line 129
        echo ($context["text_member_since"] ?? null);
        echo " ";
        echo ($context["member_date_added"] ?? null);
        echo "</small>
                  </div>
                </div>
                <br/>
                <a href=\"";
        // line 133
        echo ($context["filter_member"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo ($context["button_view_all"] ?? null);
        echo "</a> <a href=\"https://www.opencart.com/index.php?route=support/seller&amp;extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "\" target=\"_blank\" class=\"btn btn-outline-secondary btn-lg btn-block\">";
        echo ($context["button_support"] ?? null);
        echo "</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-opencart').on('click', function(e) {
\t\$('#modal-opencart').remove();

\t\$.ajax({
\t\turl: 'index.php?route=marketplace/api&user_token=";
        // line 147
        echo ($context["user_token"] ?? null);
        echo "',
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('#button-opencart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-opencart').button('reset');
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('body').append(html);

\t\t\t\$('#modal-opencart').modal('show');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-buy').on('click', function(e) {
\te.preventDefault();

\t\$('#modal-purchase').remove();

\thtml = '<div id=\"modal-purchase\" class=\"modal\">';
\thtml += '  <div class=\"modal-dialog\">';
\thtml += '    <div class=\"modal-content\">';
\thtml += '      <div class=\"modal-header\">';
\thtml += '        <h5 class=\"modal-title\">";
        // line 176
        echo ($context["text_purchase"] ?? null);
        echo "</h5>';
\thtml += '        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>';
\thtml += '      </div>';
\thtml += '      <div class=\"modal-body\">';
\thtml += '        <p>";
        // line 180
        echo ($context["text_pin"] ?? null);
        echo "</p>';
\thtml += '        <p>";
        // line 181
        echo ($context["text_secure"] ?? null);
        echo "</p>';
\thtml += '        <div class=\"form-group\">';
\thtml += '          <label for=\"input-pin\">";
        // line 183
        echo ($context["entry_pin"] ?? null);
        echo "</label>';
\thtml += '          <input type=\"password\" name=\"pin\" value=\"\" placeholder=\"";
        // line 184
        echo ($context["entry_pin"] ?? null);
        echo "\" id=\"input-pin\" class=\"form-control\" />';
\thtml += '        </div>';
\thtml += '        <div class=\"form-group text-right\">';
\thtml += '          <div class=\"float-left\"><a href=\"https://www.opencart.com/index.php?route=support/contact\" class=\"btn btn-light btn-lg\" target=\"_blank\">";
        // line 187
        echo ($context["button_forgot_pin"] ?? null);
        echo "</a></div>';
\thtml += '          <button type=\"button\" id=\"button-purchase\" data-loading-text=\"";
        // line 188
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg\">";
        echo ($context["button_purchase"] ?? null);
        echo "</button>';
\thtml += '        </div>';
\thtml += '      </div>';
\thtml += '    </div>';
\thtml += '  </div>';
\thtml += '</div>';

\t\$('body').append(html);

\t\$('#modal-purchase').modal('show');
});

\$('body').on('click', '#modal-purchase #button-purchase', function(e) {
\te.preventDefault();

\tvar element = this;

\t\$.ajax({
\t\turl: 'index.php?route=marketplace/marketplace/purchase&user_token=";
        // line 206
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'pin\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#modal-purchase .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#modal-purchase').modal('hide');

\t\t\t\t\$('#download').load('index.php?route=marketplace/marketplace/extension&user_token=";
        // line 228
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Download
\$('#download').load('index.php?route=marketplace/marketplace/extension&user_token=";
        // line 238
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "');

\$('#tab-download').on('click', '.btn-primary', function(e) {
\te.preventDefault();

\tvar element = this;

\t\$.ajax({
\t\turl: \$(element).val(),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#download').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#download').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + '  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#download').load('index.php?route=marketplace/marketplace/extension&user_token=";
        // line 264
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#tab-download').on('click', '.dropdown-item', function(e) {
\te.preventDefault();

\tvar element = this;

\t\$.ajax({
\t\turl: \$(element).attr('href'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#download').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + '  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#download').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + '  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#download').load('index.php?route=marketplace/marketplace/extension&user_token=";
        // line 297
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Comment
\$('#comment').on('click', '.pagination a', function(e) {
\te.preventDefault();

\t\$('#comment').load(this.href);
});

\$('#comment').load('index.php?route=marketplace/marketplace/comment&user_token=";
        // line 313
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "');

// Add comment
\$('#button-comment').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=marketplace/marketplace/addcomment&user_token=";
        // line 318
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: 'comment=' + encodeURIComponent(\$('textarea[name=\\'comment\\']').val()),
\t\tbeforeSend: function() {
\t\t\t\$('#button-comment').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-comment').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#tab-comment').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#tab-comment').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#comment').load('index.php?route=marketplace/marketplace/comment&user_token=";
        // line 338
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "');

\t\t\t\t\$('textarea[name=\\'comment\\']').val('');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Next replies
\$('#comment').on('click', '.btn-block', function(e) {
\te.preventDefault();

\tvar element = this;

\t\$.ajax({
\t\turl: \$(element).attr('href'),
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$(element).parent().parent().parent().append(html);

\t\t\t\$(element).parent().remove();
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Reply
\$('#comment').on('click', '.btn-link', function(e) {
\te.preventDefault();

\t\$(this).parent().parent().find('.reply-input-box').toggle();
});

// Add reply
\$('#comment').on('click', '.btn-primary', function(e) {
\te.preventDefault();

\tvar element = this;

\t\$.ajax({
\t\turl: \$(element).attr('href'),
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: 'comment=' + encodeURIComponent(\$(element).parents('.reply-input-box').find('textarea[name=\\'comment\\']').val()),
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$(element).parents('.reply-input-box').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$(element).parents('.reply-input-box').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$(element).parents('.reply-input-box').parents('.media').find('.reply-refresh').last().trigger('click');

\t\t\t\t\$(element).parents('.reply-input-box').find('textarea[name=\\'comment\\']').val('');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Refresh
\$('#comment').on('click', '.reply-refresh', function(e) {
\te.preventDefault();

\tvar element = this;

\t\$.ajax({
\t\turl: \$(element).attr('href'),
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$(element).parent().replaceWith(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype: 'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});
//--></script>
";
        // line 455
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "marketplace/marketplace_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  767 => 455,  645 => 338,  620 => 318,  610 => 313,  589 => 297,  551 => 264,  520 => 238,  505 => 228,  478 => 206,  455 => 188,  451 => 187,  445 => 184,  441 => 183,  436 => 181,  432 => 180,  425 => 176,  393 => 147,  370 => 133,  361 => 129,  355 => 128,  346 => 126,  336 => 121,  328 => 118,  320 => 113,  316 => 112,  309 => 108,  305 => 107,  291 => 102,  284 => 101,  280 => 100,  276 => 99,  269 => 95,  265 => 94,  261 => 93,  255 => 89,  249 => 87,  243 => 85,  241 => 84,  237 => 83,  234 => 82,  228 => 80,  226 => 79,  214 => 70,  206 => 65,  200 => 62,  195 => 60,  186 => 54,  180 => 51,  176 => 50,  168 => 47,  164 => 46,  160 => 45,  156 => 44,  152 => 42,  137 => 40,  133 => 39,  130 => 38,  120 => 36,  118 => 35,  111 => 31,  108 => 30,  100 => 26,  98 => 25,  92 => 21,  81 => 19,  77 => 18,  72 => 16,  64 => 13,  61 => 12,  55 => 10,  49 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketplace/marketplace_info.twig", "");
    }
}
