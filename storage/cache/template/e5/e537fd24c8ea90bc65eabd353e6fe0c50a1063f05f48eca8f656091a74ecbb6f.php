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

/* customer/gdpr.twig */
class __TwigTemplate_5c7222cedecb3b1164bf9975d196381c9f6573fc9c20b7e1a661b4e6fbd83b19 extends Template
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
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-gdpr').toggleClass('d-none');\" class=\"btn btn-light d-md-none d-lg-none\"><i class=\"fas fa-filter\"></i></button>
        <button type=\"button\" id=\"button-approve\" formaction=\"";
        // line 7
        echo ($context["approve"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["text_approve"] ?? null);
        echo "\" class=\"btn btn-success\"><i class=\"fas fa-check\"></i></button>
        <button type=\"button\" id=\"button-deny\" formaction=\"";
        // line 8
        echo ($context["deny"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["text_deny"] ?? null);
        echo "\" class=\"btn btn-warning\"><i class=\"fas fa-times\"></i></button>
        <button type=\"button\" id=\"button-delete\" formaction=\"";
        // line 9
        echo ($context["delete"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["text_delete"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fas fa-trash-alt\"></i></button>
      </div>
      <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 20
        if (($context["error_warning"] ?? null)) {
            // line 21
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 25
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 26
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 30
        echo "    <div class=\"alert alert-warning\"><i class=\"fas fa-info-circle\"></i> ";
        echo ($context["text_info"] ?? null);
        echo "</div>
    <div class=\"row\">
      <div id=\"filter-gdpr\" class=\"col-md-3 col-sm-12 order-md-9 d-none d-md-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fas fa-filter\"></i> ";
        // line 34
        echo ($context["text_filter"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <div class=\"form-group\">
              <label class=\"col-form-label\">";
        // line 37
        echo ($context["entry_email"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_email\" value=\"\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label for=\"input-action\" class=\"col-form-label\">";
        // line 40
        echo ($context["entry_action"] ?? null);
        echo "</label> <select name=\"filter_action\" id=\"input-action\" class=\"form-control\">
                <option value=\"\"></option>
                <option value=\"export\">";
        // line 42
        echo ($context["text_export"] ?? null);
        echo "</option>
                <option value=\"remove\">";
        // line 43
        echo ($context["text_remove"] ?? null);
        echo "</option>
              </select>
            </div>
            <div class=\"form-group\">
              <label for=\"input-status\" class=\"col-form-label\">";
        // line 47
        echo ($context["entry_status"] ?? null);
        echo "</label> <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
\t\t\t\t\t<option value=\"0\">";
        // line 49
        echo ($context["text_unverified"] ?? null);
        echo "</option>
\t\t\t\t\t<option value=\"1\">";
        // line 50
        echo ($context["text_pending"] ?? null);
        echo "</option>
                <option value=\"2\">";
        // line 51
        echo ($context["text_processing"] ?? null);
        echo "</option>
                <option value=\"3\">";
        // line 52
        echo ($context["text_complete"] ?? null);
        echo "</option>
                <option value=\"-1\">";
        // line 53
        echo ($context["text_denied"] ?? null);
        echo "</option>
              </select>
            </div>
            <div class=\"form-group\">
              <label for=\"input-date-added\" class=\"col-form-label\">";
        // line 57
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"\" placeholder=\"";
        // line 59
        echo ($context["entry_date_added"] ?? null);
        echo "\" id=\"input-date-added\" class=\"form-control\"/>
                <div class=\"input-group-append\">
                  <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                </div>
              </div>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fas fa-filter\"></i> ";
        // line 66
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-sm-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fas fa-list\"></i> ";
        // line 73
        echo ($context["text_list"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <div id=\"gdpr\"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#gdpr').on('click', '.pagination a', function(e) {
\te.preventDefault();

\t\$('#gdpr').load(this.href);
});

\$('#gdpr').load('index.php?route=customer/gdpr/gdpr&user_token=";
        // line 89
        echo ($context["user_token"] ?? null);
        echo "');

\$('#button-approve, #button-deny, #button-delete').on('click', function(e) {
\te.preventDefault();

\tvar element = this;

\t\$.ajax({
\t\turl: \$(element).attr('formaction'),
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$('#gdpr input[name=\\'selected[]\\']:checked'),
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#gdpr').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#gdpr').load('index.php?route=customer/gdpr/gdpr&user_token=";
        // line 115
        echo ($context["user_token"] ?? null);
        echo "');

\t\t\t\t\$('#gdpr').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#gdpr').on('click', '.btn-success, .btn-warning, .btn-danger', function(e) {
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
\t\t\t\t\$('#gdpr').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#gdpr').load('index.php?route=customer/gdpr/gdpr&user_token=";
        // line 148
        echo ($context["user_token"] ?? null);
        echo "');

\t\t\t\t\$('#gdpr').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#button-filter').on('click', function() {
\tvar url = '';

\tvar filter_email = \$('input[name=\\'filter_email\\']').val();

\tif (filter_email) {
\t\turl += '&filter_email=' + encodeURIComponent(filter_email);
\t}

\tvar filter_action = \$('select[name=\\'filter_action\\']').val();

\tif (filter_action !== '') {
\t\turl += '&filter_action=' + filter_action;
\t}

\tvar filter_status = \$('select[name=\\'filter_status\\']').val();

\tif (filter_status !== '') {
\t\turl += '&filter_status=' + filter_status;
\t}

\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}

\t\$('#gdpr').load('index.php?route=customer/gdpr/gdpr&user_token=";
        // line 186
        echo ($context["user_token"] ?? null);
        echo "' + url);
});
//--></script>
<script type=\"text/javascript\"><!--
\$('input[name=\\'filter_email\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 193
        echo ($context["user_token"] ?? null);
        echo "&filter_email=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['email'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_email\\']').val(item['label']);
\t}
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\t'format': 'YYYY-MM-DD',
\t'locale': '";
        // line 213
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});
//--></script>
";
        // line 217
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "customer/gdpr.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 217,  365 => 213,  342 => 193,  332 => 186,  291 => 148,  255 => 115,  226 => 89,  207 => 73,  197 => 66,  187 => 59,  182 => 57,  175 => 53,  171 => 52,  167 => 51,  163 => 50,  159 => 49,  154 => 47,  147 => 43,  143 => 42,  138 => 40,  130 => 37,  124 => 34,  116 => 30,  108 => 26,  105 => 25,  97 => 21,  95 => 20,  89 => 16,  78 => 14,  74 => 13,  69 => 11,  62 => 9,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customer/gdpr.twig", "");
    }
}
