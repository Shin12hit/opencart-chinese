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

/* marketing/affiliate_list.twig */
class __TwigTemplate_bf3460ea946160436cbe4612d1400fe059c47d1d8ed9be3216fdce8d762bc38a extends Template
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
        echo "\" onclick=\"\$('#filter-customer').toggleClass('d-none');\" class=\"btn btn-light d-md-none\"><i class=\"fas fa-filter\"></i></button>
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
        echo "') ? \$('#form-customer').submit() : false;\"><i class=\"fas fa-trash-alt\"></i></button>
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
      <div id=\"filter-customer\" class=\"col-md-3 col-sm-12 order-md-9 d-none d-md-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fas fa-filter\"></i> ";
        // line 31
        echo ($context["text_filter"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <div class=\"form-group\">
              <label class=\"col-form-label\">";
        // line 34
        echo ($context["entry_customer"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_name\" value=\"";
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label for=\"input-tracking\" class=\"col-form-label\">";
        // line 37
        echo ($context["entry_tracking"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_tracking\" value=\"";
        echo ($context["filter_tracking"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_tracking"] ?? null);
        echo "\" id=\"input-tracking\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label for=\"input-commission\" class=\"col-form-label\">";
        // line 40
        echo ($context["entry_commission"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_commission\" value=\"";
        echo ($context["filter_commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_commission"] ?? null);
        echo "\" id=\"input-commission\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label for=\"input-status\" class=\"col-form-label\">";
        // line 43
        echo ($context["entry_status"] ?? null);
        echo "</label> <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 45
        if ((0 === twig_compare(($context["filter_status"] ?? null), "1"))) {
            // line 46
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 48
            echo "                  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                ";
        }
        // line 50
        echo "                ";
        if ((0 === twig_compare(($context["filter_status"] ?? null), "0"))) {
            // line 51
            echo "                  <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 53
            echo "                  <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 55
        echo "              </select>
            </div>
            <div class=\"form-group\">
              <label for=\"input-date-added\" class=\"col-form-label\">";
        // line 58
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 60
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
        // line 67
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-sm-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fas fa-list\"></i> ";
        // line 74
        echo ($context["text_list"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <form action=\"";
        // line 76
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-customer\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').trigger('click');\"/></td>
                      <td class=\"text-left\">";
        // line 82
        if ((0 === twig_compare(($context["sort"] ?? null), "name"))) {
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
        // line 83
        if ((0 === twig_compare(($context["sort"] ?? null), "ca.tracking"))) {
            echo "<a href=\"";
            echo ($context["sort_tracking"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_tracking"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_tracking"] ?? null);
            echo "\">";
            echo ($context["column_tracking"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 84
        if ((0 === twig_compare(($context["sort"] ?? null), "ca.commission"))) {
            echo "<a href=\"";
            echo ($context["sort_commission"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_commission"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_commission"] ?? null);
            echo "\">";
            echo ($context["column_commission"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 85
        echo ($context["column_balance"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 86
        if ((0 === twig_compare(($context["sort"] ?? null), "ca.status"))) {
            echo "<a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 87
        if ((0 === twig_compare(($context["sort"] ?? null), "ca.date_added"))) {
            echo "<a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 88
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 92
        if (($context["affiliates"] ?? null)) {
            // line 93
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["affiliates"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["affiliate"]) {
                // line 94
                echo "                        <tr>
                          <td class=\"text-center\">";
                // line 95
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["affiliate"], "customer_id", [], "any", false, false, false, 95), ($context["selected"] ?? null))) {
                    // line 96
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["affiliate"], "customer_id", [], "any", false, false, false, 96);
                    echo "\" checked=\"checked\"/>
                            ";
                } else {
                    // line 98
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["affiliate"], "customer_id", [], "any", false, false, false, 98);
                    echo "\"/>
                            ";
                }
                // line 99
                echo " </td>
                          <td class=\"text-left\"><a href=\"";
                // line 100
                echo twig_get_attribute($this->env, $this->source, $context["affiliate"], "customer", [], "any", false, false, false, 100);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["affiliate"], "name", [], "any", false, false, false, 100);
                echo "</a></td>
                          <td class=\"text-left\">";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["affiliate"], "tracking", [], "any", false, false, false, 101);
                echo "</td>
                          <td class=\"text-right\">";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["affiliate"], "commission", [], "any", false, false, false, 102);
                echo "</td>
                          <td class=\"text-right\">";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["affiliate"], "balance", [], "any", false, false, false, 103);
                echo "</td>
                          <td class=\"text-left\">";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["affiliate"], "status", [], "any", false, false, false, 104);
                echo "</td>
                          <td class=\"text-left\">";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["affiliate"], "date_added", [], "any", false, false, false, 105);
                echo "</td>
                          <td class=\"text-right\"><a href=\"";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context["affiliate"], "edit", [], "any", false, false, false, 106);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fas fa-pencil-alt\"></i></a></td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affiliate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "                    ";
        } else {
            // line 110
            echo "                      <tr>
                        <td class=\"text-center\" colspan=\"8\">";
            // line 111
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                      </tr>
                    ";
        }
        // line 114
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 119
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 120
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
\turl = 'index.php?route=marketing/affiliate&user_token=";
        // line 130
        echo ($context["user_token"] ?? null);
        echo "';

\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\tvar filter_tracking = \$('input[name=\\'filter_tracking\\']').val();

\tif (filter_tracking) {
\t\turl += '&filter_tracking=' + encodeURIComponent(filter_tracking);
\t}

\tvar filter_commission = \$('input[name=\\'filter_commission\\']').val();

\tif (filter_commission) {
\t\turl += '&filter_commission=' + filter_commission;
\t}

\tvar filter_status = \$('select[name=\\'filter_status\\']').val();

\tif (filter_status !== '') {
\t\turl += '&filter_status=' + filter_status;
\t}

\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + filter_date_added;
\t}

\tlocation = url;
});
//--></script>
<script type=\"text/javascript\"><!--
\$('input[name=\\'filter_name\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 169
        echo ($context["user_token"] ?? null);
        echo "&filter_affiliate=1&filter_name=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_name\\']').val(item['label']);
\t}
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\t'format': 'YYYY-MM-DD',
\t'locale': '";
        // line 189
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});
//--></script>
";
        // line 193
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "marketing/affiliate_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  503 => 193,  496 => 189,  473 => 169,  431 => 130,  418 => 120,  414 => 119,  407 => 114,  401 => 111,  398 => 110,  395 => 109,  384 => 106,  380 => 105,  376 => 104,  372 => 103,  368 => 102,  364 => 101,  358 => 100,  355 => 99,  349 => 98,  343 => 96,  341 => 95,  338 => 94,  333 => 93,  331 => 92,  324 => 88,  306 => 87,  288 => 86,  284 => 85,  266 => 84,  248 => 83,  230 => 82,  221 => 76,  216 => 74,  206 => 67,  194 => 60,  189 => 58,  184 => 55,  178 => 53,  172 => 51,  169 => 50,  163 => 48,  157 => 46,  155 => 45,  150 => 43,  140 => 40,  130 => 37,  120 => 34,  114 => 31,  109 => 28,  101 => 24,  98 => 23,  90 => 19,  88 => 18,  83 => 15,  72 => 13,  68 => 12,  63 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketing/affiliate_list.twig", "");
    }
}
