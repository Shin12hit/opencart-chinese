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

/* catalog/product_list.twig */
class __TwigTemplate_eb3cd42c6c72092d00ab229f30388c398f8c98494db3a221cec0011980afcaf6 extends Template
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
        echo "\" onclick=\"\$('#filter-product').toggleClass('d-none');\" class=\"btn btn-light d-md-none d-lg-none\"><i class=\"fas fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 8
        echo ($context["copy"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_copy"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-copy\"></i></button>
        <button type=\"button\" form=\"form-product\" formaction=\"";
        // line 9
        echo ($context["delete"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-product').submit() : false;\"><i class=\"far fa-trash-alt\"></i></button>
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
        echo "    <div class=\"row\">
      <div id=\"filter-product\" class=\"col-md-3 col-sm-12 order-md-9 d-none d-md-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fas fa-filter\"></i> ";
        // line 33
        echo ($context["text_filter"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <div class=\"form-group\">
              <label class=\"col-form-label\">";
        // line 36
        echo ($context["entry_name"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_name\" value=\"";
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label class=\"col-form-label\">";
        // line 39
        echo ($context["entry_model"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_model\" value=\"";
        echo ($context["filter_model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label for=\"input-price\" class=\"col-form-label\">";
        // line 42
        echo ($context["entry_price"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_price\" value=\"";
        echo ($context["filter_price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_price"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label for=\"input-quantity\" class=\"col-form-label\">";
        // line 45
        echo ($context["entry_quantity"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_quantity\" value=\"";
        echo ($context["filter_quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label for=\"input-status\" class=\"col-form-label\">";
        // line 48
        echo ($context["entry_status"] ?? null);
        echo "</label> <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 50
        if ((0 === twig_compare(($context["filter_status"] ?? null), "1"))) {
            // line 51
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 53
            echo "                  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                ";
        }
        // line 55
        echo "                ";
        if ((0 === twig_compare(($context["filter_status"] ?? null), "0"))) {
            // line 56
            echo "                  <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 58
            echo "                  <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 60
        echo "              </select>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fas fa-filter\"></i> ";
        // line 63
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-sm-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fas fa-list\"></i> ";
        // line 70
        echo ($context["text_list"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <form action=\"";
        // line 72
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').trigger('click');\"/></td>
                      <td class=\"text-center\">";
        // line 78
        echo ($context["column_image"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 79
        if ((0 === twig_compare(($context["sort"] ?? null), "pd.name"))) {
            echo "<a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 80
        if ((0 === twig_compare(($context["sort"] ?? null), "p.model"))) {
            echo "<a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 81
        if ((0 === twig_compare(($context["sort"] ?? null), "p.price"))) {
            echo "<a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 82
        if ((0 === twig_compare(($context["sort"] ?? null), "p.quantity"))) {
            echo "<a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 83
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 87
        if (($context["products"] ?? null)) {
            // line 88
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 89
                echo "                        <tr";
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "variant", [], "any", false, false, false, 89)) {
                    echo " class=\"table-warning\"";
                }
                echo ">
                          <td class=\"text-center\">";
                // line 90
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 90), ($context["selected"] ?? null))) {
                    // line 91
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 91);
                    echo "\" checked=\"checked\"/>
                            ";
                } else {
                    // line 93
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 93);
                    echo "\"/>
                            ";
                }
                // line 94
                echo "</td>
                          <td class=\"text-center\"><img src=\"";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 95);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 95);
                echo "\" class=\"img-thumbnail\"/></td>
                          <td class=\"text-left\">";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 96);
                echo "
                            <br/>
                            ";
                // line 98
                if (twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 98)) {
                    // line 99
                    echo "                              <small class=\"text-success\">";
                    echo ($context["text_enabled"] ?? null);
                    echo "</small>
                            ";
                } else {
                    // line 101
                    echo "                              <small class=\"text-danger\">";
                    echo ($context["text_disabled"] ?? null);
                    echo "</small>
                            ";
                }
                // line 102
                echo "</td>
                          <td class=\"text-left\">";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 103);
                echo "</td>
                          <td class=\"text-right\">
                            ";
                // line 105
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 105)) {
                    echo "<span style=\"text-decoration: line-through;\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 105);
                    echo "</span>
                              <br/>
                              <div class=\"text-danger\">";
                    // line 107
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 107);
                    echo "</div>
                            ";
                } else {
                    // line 109
                    echo "                              ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 109);
                    echo "
                            ";
                }
                // line 110
                echo "</td>
                          <td class=\"text-right\">
                            ";
                // line 112
                if ((0 >= twig_compare(twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 112), 0))) {
                    // line 113
                    echo "                              <span class=\"badge badge-warning\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 113);
                    echo "</span>
                            ";
                } elseif ((0 >= twig_compare(twig_get_attribute($this->env, $this->source,                 // line 114
$context["product"], "quantity", [], "any", false, false, false, 114), 5))) {
                    // line 115
                    echo "                              <span class=\"badge badge-danger\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 115);
                    echo "</span>
                            ";
                } else {
                    // line 117
                    echo "                              <span class=\"badge badge-success\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 117);
                    echo "</span>
                            ";
                }
                // line 118
                echo "</td>
                          <td class=\"text-right\">
                            ";
                // line 120
                if (twig_get_attribute($this->env, $this->source, $context["product"], "variant", [], "any", false, false, false, 120)) {
                    // line 121
                    echo "                              <div class=\"btn-group\">
                                <a href=\"";
                    // line 122
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 122);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_edit"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fas fa-pencil-alt\"></i></a>
                                <button type=\"button\" class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\"><i class=\"fas fa-caret-down\"></i></button>
                                <div class=\"dropdown-menu dropdown-menu-right\"><a href=\"";
                    // line 124
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "variant", [], "any", false, false, false, 124);
                    echo "\" class=\"dropdown-item\"><i class=\"fas fa-plus\"></i> ";
                    echo ($context["text_variant_add"] ?? null);
                    echo "</a></div>
                              </div>
                            ";
                } else {
                    // line 127
                    echo "                              <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 127);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_edit"] ?? null);
                    echo "\" class=\"btn btn-warning\"><i class=\"fas fa-pencil-alt\"></i></a>
                            ";
                }
                // line 129
                echo "                          </td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "                    ";
        } else {
            // line 133
            echo "                      <tr>
                        <td class=\"text-center\" colspan=\"7\">";
            // line 134
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                      </tr>
                    ";
        }
        // line 137
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 142
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 143
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
// IE and Edge fix!
\$('button[form=\\'form-product\\']').on('click', function(e) {
\t\$('#form-product').attr('action', \$(this).attr('formaction'));
});

\$('#button-filter').on('click', function() {
\tvar url = '';

\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\tvar filter_model = \$('input[name=\\'filter_model\\']').val();

\tif (filter_model) {
\t\turl += '&filter_model=' + encodeURIComponent(filter_model);
\t}

\tvar filter_price = \$('input[name=\\'filter_price\\']').val();

\tif (filter_price) {
\t\turl += '&filter_price=' + encodeURIComponent(filter_price);
\t}

\tvar filter_quantity = \$('input[name=\\'filter_quantity\\']').val();

\tif (filter_quantity) {
\t\turl += '&filter_quantity=' + encodeURIComponent(filter_quantity);
\t}

\tvar filter_status = \$('select[name=\\'filter_status\\']').val();

\tif (filter_status !== '') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
\t}

\tlocation = 'index.php?route=catalog/product&user_token=";
        // line 190
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
//--></script>
<script type=\"text/javascript\"><!--
\$('input[name=\\'filter_name\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 197
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_name\\']').val(item['label']);
\t}
});

\$('input[name=\\'filter_model\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 217
        echo ($context["user_token"] ?? null);
        echo "&filter_model=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['model'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_model\\']').val(item['label']);
\t}
});
//--></script>
";
        // line 234
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/product_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  588 => 234,  568 => 217,  545 => 197,  535 => 190,  485 => 143,  481 => 142,  474 => 137,  468 => 134,  465 => 133,  462 => 132,  454 => 129,  446 => 127,  438 => 124,  431 => 122,  428 => 121,  426 => 120,  422 => 118,  416 => 117,  410 => 115,  408 => 114,  403 => 113,  401 => 112,  397 => 110,  391 => 109,  386 => 107,  379 => 105,  374 => 103,  371 => 102,  365 => 101,  359 => 99,  357 => 98,  352 => 96,  346 => 95,  343 => 94,  337 => 93,  331 => 91,  329 => 90,  322 => 89,  317 => 88,  315 => 87,  308 => 83,  290 => 82,  272 => 81,  254 => 80,  236 => 79,  232 => 78,  223 => 72,  218 => 70,  208 => 63,  203 => 60,  197 => 58,  191 => 56,  188 => 55,  182 => 53,  176 => 51,  174 => 50,  169 => 48,  159 => 45,  149 => 42,  139 => 39,  129 => 36,  123 => 33,  118 => 30,  110 => 26,  107 => 25,  99 => 21,  97 => 20,  91 => 16,  80 => 14,  76 => 13,  71 => 11,  62 => 9,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/product_list.twig", "");
    }
}
