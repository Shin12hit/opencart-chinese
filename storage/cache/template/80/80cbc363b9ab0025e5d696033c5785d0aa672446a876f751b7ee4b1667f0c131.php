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

/* catalog/recurring_list.twig */
class __TwigTemplate_e0cfa36806e02e18d305a3a31800d8ab2f2367e35f1c0181f70b54adff4f5885 extends Template
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
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-recurring\" formaction=\"";
        // line 6
        echo ($context["copy"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_copy"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-copy\"></i></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-recurring').submit() : false;\"><i class=\"fas fa-trash-alt\"></i></button>
      </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
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
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-list\"></i> ";
        // line 29
        echo ($context["text_list"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 31
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-recurring\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-center\" width=\"1\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').trigger('click');\"/></td>
                  <td class=\"text-left\">";
        // line 37
        if ((0 === twig_compare(($context["sort"] ?? null), "rd.name"))) {
            // line 38
            echo "                      <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 40
            echo "                      <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        }
        // line 41
        echo "</td>
                  <td class=\"text-right\">";
        // line 42
        if ((0 === twig_compare(($context["sort"] ?? null), "r.sort_order"))) {
            // line 43
            echo "                      <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 45
            echo "                      <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        }
        // line 46
        echo "</td>
                  <td class=\"text-right\">";
        // line 47
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 51
        if (($context["recurrings"] ?? null)) {
            // line 52
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 53
                echo "                    <tr>
                      <td class=\"text-center\">";
                // line 54
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 54), ($context["selected"] ?? null))) {
                    // line 55
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 55);
                    echo "\" checked=\"checked\"/>
                        ";
                } else {
                    // line 57
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 57);
                    echo "\"/>
                        ";
                }
                // line 58
                echo "</td>
                      <td class=\"text-left\">";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 59);
                echo "</td>
                      <td class=\"text-right\">";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "sort_order", [], "any", false, false, false, 60);
                echo "</td>
                      <td class=\"text-right\"><a href=\"";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "edit", [], "any", false, false, false, 61);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fas fa-pencil-alt\"></i></a></td>
                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                ";
        } else {
            // line 65
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"4\">";
            // line 66
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                ";
        }
        // line 69
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 74
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 75
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 81
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/recurring_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 81,  250 => 75,  246 => 74,  239 => 69,  233 => 66,  230 => 65,  227 => 64,  216 => 61,  212 => 60,  208 => 59,  205 => 58,  199 => 57,  193 => 55,  191 => 54,  188 => 53,  183 => 52,  181 => 51,  174 => 47,  171 => 46,  163 => 45,  153 => 43,  151 => 42,  148 => 41,  140 => 40,  130 => 38,  128 => 37,  119 => 31,  114 => 29,  111 => 28,  103 => 24,  100 => 23,  92 => 19,  90 => 18,  84 => 14,  73 => 12,  69 => 11,  64 => 9,  57 => 7,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/recurring_list.twig", "");
    }
}
