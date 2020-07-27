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

/* localisation/currency_list.twig */
class __TwigTemplate_3137abe3c2ab62217583bf0bee942dc178a7c11715be76021108eedb908ccf0c extends Template
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
      <div class=\"float-right\"><a href=\"";
        // line 5
        echo ($context["refresh"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_currency"] ?? null);
        echo "\" class=\"btn btn-warning\"><i class=\"fas fa-sync\"></i></a> <a href=\"";
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-currency').submit() : false;\"><i class=\"fas fa-trash-alt\"></i></button>
      </div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 22
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 23
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 27
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-list\"></i> ";
        // line 28
        echo ($context["text_list"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 30
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').trigger('click');\"/></td>
                  <td class=\"text-left\">";
        // line 36
        if ((0 === twig_compare(($context["sort"] ?? null), "title"))) {
            // line 37
            echo "                      <a href=\"";
            echo ($context["sort_title"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 39
            echo "                      <a href=\"";
            echo ($context["sort_title"] ?? null);
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                    ";
        }
        // line 40
        echo "</td>
                  <td class=\"text-left\">";
        // line 41
        if ((0 === twig_compare(($context["sort"] ?? null), "code"))) {
            // line 42
            echo "                      <a href=\"";
            echo ($context["sort_code"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_code"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 44
            echo "                      <a href=\"";
            echo ($context["sort_code"] ?? null);
            echo "\">";
            echo ($context["column_code"] ?? null);
            echo "</a>
                    ";
        }
        // line 45
        echo "</td>
                  <td class=\"text-right\">";
        // line 46
        if ((0 === twig_compare(($context["sort"] ?? null), "value"))) {
            // line 47
            echo "                      <a href=\"";
            echo ($context["sort_value"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_value"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 49
            echo "                      <a href=\"";
            echo ($context["sort_value"] ?? null);
            echo "\">";
            echo ($context["column_value"] ?? null);
            echo "</a>
                    ";
        }
        // line 50
        echo "</td>
                  <td class=\"text-left\">";
        // line 51
        if ((0 === twig_compare(($context["sort"] ?? null), "status"))) {
            // line 52
            echo "                      <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 54
            echo "                      <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        }
        // line 55
        echo "</td>
                  <td class=\"text-left\">";
        // line 56
        if ((0 === twig_compare(($context["sort"] ?? null), "date_modified"))) {
            // line 57
            echo "                      <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 59
            echo "                      <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a>
                    ";
        }
        // line 60
        echo "</td>
                  <td class=\"text-right\">";
        // line 61
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 65
        if (($context["currencies"] ?? null)) {
            // line 66
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 67
                echo "                    <tr>
                      <td class=\"text-center\">";
                // line 68
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["currency"], "currency_id", [], "any", false, false, false, 68), ($context["selected"] ?? null))) {
                    // line 69
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "currency_id", [], "any", false, false, false, 69);
                    echo "\" checked=\"checked\"/>
                        ";
                } else {
                    // line 71
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "currency_id", [], "any", false, false, false, 71);
                    echo "\"/>
                        ";
                }
                // line 72
                echo "</td>
                      <td class=\"text-left\">";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 73);
                echo "</td>
                      <td class=\"text-left\">";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 74);
                echo "</td>
                      <td class=\"text-right\">";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "value", [], "any", false, false, false, 75);
                echo "</td>
                      <td class=\"text-left\">";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "status", [], "any", false, false, false, 76);
                echo "</td>
                      <td class=\"text-left\">";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "date_modified", [], "any", false, false, false, 77);
                echo "</td>
                      <td class=\"text-right\"><a href=\"";
                // line 78
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "edit", [], "any", false, false, false, 78);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fas fa-pencil-alt\"></i></a></td>
                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                ";
        } else {
            // line 82
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"6\">";
            // line 83
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                ";
        }
        // line 86
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 91
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 92
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 98
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "localisation/currency_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 98,  329 => 92,  325 => 91,  318 => 86,  312 => 83,  309 => 82,  306 => 81,  295 => 78,  291 => 77,  287 => 76,  283 => 75,  279 => 74,  275 => 73,  272 => 72,  266 => 71,  260 => 69,  258 => 68,  255 => 67,  250 => 66,  248 => 65,  241 => 61,  238 => 60,  230 => 59,  220 => 57,  218 => 56,  215 => 55,  207 => 54,  197 => 52,  195 => 51,  192 => 50,  184 => 49,  174 => 47,  172 => 46,  169 => 45,  161 => 44,  151 => 42,  149 => 41,  146 => 40,  138 => 39,  128 => 37,  126 => 36,  117 => 30,  112 => 28,  109 => 27,  101 => 23,  98 => 22,  90 => 18,  88 => 17,  82 => 13,  71 => 11,  67 => 10,  62 => 8,  55 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "localisation/currency_list.twig", "");
    }
}
