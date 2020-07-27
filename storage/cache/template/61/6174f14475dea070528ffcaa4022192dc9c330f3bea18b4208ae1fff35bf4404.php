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

/* catalog/review_list.twig */
class __TwigTemplate_6a9962a7ab9dc5bc17754699e2552a5a54a55606bc01d53572e4687ce8778e35 extends Template
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
        echo "\" onclick=\"\$('#filter-review').toggleClass('d-none');\" class=\"btn btn-light d-md-none d-lg-none\"><i class=\"fas fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-review').submit() : false;\"><i class=\"fas fa-trash-alt\"></i></button>
      </div>
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 23
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 24
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 28
        echo "    <div class=\"row\">
      <div id=\"filter-review\" class=\"col-md-3 col-sm-12 order-md-9 d-none d-md-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fas fa-filter\"></i> ";
        // line 31
        echo ($context["text_filter"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <div class=\"form-group\">
              <label for=\"input-product\" class=\"col-form-label\">";
        // line 34
        echo ($context["entry_product"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_product\" value=\"";
        echo ($context["filter_product"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label for=\"input-author\" class=\"col-form-label\">";
        // line 37
        echo ($context["entry_author"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_author\" value=\"";
        echo ($context["filter_author"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_author"] ?? null);
        echo "\" id=\"input-author\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label for=\"input-status\" class=\"col-form-label\">";
        // line 40
        echo ($context["entry_status"] ?? null);
        echo "</label> <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 42
        if ((0 === twig_compare(($context["filter_status"] ?? null), "1"))) {
            // line 43
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 45
            echo "                  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                ";
        }
        // line 47
        echo "                ";
        if ((0 === twig_compare(($context["filter_status"] ?? null), "0"))) {
            // line 48
            echo "                  <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 50
            echo "                  <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 52
        echo "              </select>
            </div>
            <div class=\"form-group\">
              <label for=\"input-date-added\" class=\"col-form-label\">";
        // line 55
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 57
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" id=\"input-date-added\" class=\"form-control\"/>
                <div class=\"input-group-append\">
                  <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                </div>
              </div>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fas fa-filter\"></i> ";
        // line 64
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-sm-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fas fa-list\"></i> ";
        // line 71
        echo ($context["text_list"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <form action=\"";
        // line 73
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-review\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').trigger('click');\"/></td>
                      <td class=\"text-left\">";
        // line 79
        if ((0 === twig_compare(($context["sort"] ?? null), "pd.name"))) {
            echo " <a href=\"";
            echo ($context["sort_product"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_product"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_product"] ?? null);
            echo "\">";
            echo ($context["column_product"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 80
        if ((0 === twig_compare(($context["sort"] ?? null), "r.author"))) {
            echo " <a href=\"";
            echo ($context["sort_author"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_author"] ?? null);
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 81
        if ((0 === twig_compare(($context["sort"] ?? null), "r.rating"))) {
            echo " <a href=\"";
            echo ($context["sort_rating"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_rating"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_rating"] ?? null);
            echo "\">";
            echo ($context["column_rating"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 82
        if ((0 === twig_compare(($context["sort"] ?? null), "r.status"))) {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 83
        if ((0 === twig_compare(($context["sort"] ?? null), "r.date_added"))) {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 84
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 88
        if (($context["reviews"] ?? null)) {
            // line 89
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 90
                echo "                        <tr>
                          <td class=\"text-center\">";
                // line 91
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 91), ($context["selected"] ?? null))) {
                    // line 92
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 92);
                    echo "\" checked=\"checked\"/>
                            ";
                } else {
                    // line 94
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 94);
                    echo "\"/>
                            ";
                }
                // line 95
                echo "</td>
                          <td class=\"text-left\">";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 96);
                echo "</td>
                          <td class=\"text-left\">";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 97);
                echo "</td>
                          <td class=\"text-right\">";
                // line 98
                echo twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 98);
                echo "</td>
                          <td class=\"text-left\">";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["review"], "status", [], "any", false, false, false, 99);
                echo "</td>
                          <td class=\"text-left\">";
                // line 100
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 100);
                echo "</td>
                          <td class=\"text-right\"><a href=\"";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["review"], "edit", [], "any", false, false, false, 101);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fas fa-pencil-alt\"></i></a></td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "                    ";
        } else {
            // line 105
            echo "                      <tr>
                        <td class=\"text-center\" colspan=\"7\">";
            // line 106
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                      </tr>
                    ";
        }
        // line 109
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 114
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 115
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
\$('#button-filter').on('click', function() {
\turl = 'index.php?route=catalog/review&user_token=";
        // line 125
        echo ($context["user_token"] ?? null);
        echo "';

\tvar filter_product = \$('input[name=\\'filter_product\\']').val();

\tif (filter_product) {
\t\turl += '&filter_product=' + encodeURIComponent(filter_product);
\t}

\tvar filter_author = \$('input[name=\\'filter_author\\']').val();

\tif (filter_author) {
\t\turl += '&filter_author=' + encodeURIComponent(filter_author);
\t}

\tvar filter_status = \$('select[name=\\'filter_status\\']').val();

\tif (filter_status !== '') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
\t}

\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}

\tlocation = url;
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\t'format': 'YYYY-MM-DD',
\t'locale': '";
        // line 157
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});
//--></script>
";
        // line 161
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/review_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 161,  446 => 157,  411 => 125,  398 => 115,  394 => 114,  387 => 109,  381 => 106,  378 => 105,  375 => 104,  364 => 101,  360 => 100,  356 => 99,  352 => 98,  348 => 97,  344 => 96,  341 => 95,  335 => 94,  329 => 92,  327 => 91,  324 => 90,  319 => 89,  317 => 88,  310 => 84,  292 => 83,  274 => 82,  256 => 81,  238 => 80,  220 => 79,  211 => 73,  206 => 71,  196 => 64,  184 => 57,  179 => 55,  174 => 52,  168 => 50,  162 => 48,  159 => 47,  153 => 45,  147 => 43,  145 => 42,  140 => 40,  130 => 37,  120 => 34,  114 => 31,  109 => 28,  101 => 24,  98 => 23,  90 => 19,  88 => 18,  83 => 15,  72 => 13,  68 => 12,  63 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/review_list.twig", "");
    }
}
