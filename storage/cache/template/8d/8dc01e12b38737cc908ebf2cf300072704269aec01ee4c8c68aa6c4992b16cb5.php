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

/* user/user_list.twig */
class __TwigTemplate_260cdbb40692066ee1e312106d903e34910a9b995330717ec76b0741b5e393df extends Template
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
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-user').submit() : false;\"><i class=\"fas fa-trash-alt\"></i></button>
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-user\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').trigger('click');\"/></td>
                  <td class=\"text-left\">";
        // line 36
        if ((0 === twig_compare(($context["sort"] ?? null), "username"))) {
            // line 37
            echo "                      <a href=\"";
            echo ($context["sort_username"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_username"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 39
            echo "                      <a href=\"";
            echo ($context["sort_username"] ?? null);
            echo "\">";
            echo ($context["column_username"] ?? null);
            echo "</a>
                    ";
        }
        // line 40
        echo "</td>
                  <td class=\"text-left\">";
        // line 41
        if ((0 === twig_compare(($context["sort"] ?? null), "status"))) {
            // line 42
            echo "                      <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 44
            echo "                      <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        }
        // line 45
        echo "</td>
                  <td class=\"text-left\">";
        // line 46
        if ((0 === twig_compare(($context["sort"] ?? null), "date_added"))) {
            // line 47
            echo "                      <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 49
            echo "                      <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                    ";
        }
        // line 50
        echo "</td>
                  <td class=\"text-right\">";
        // line 51
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 55
        if (($context["users"] ?? null)) {
            // line 56
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 57
                echo "                    <tr>
                      <td class=\"text-center\">";
                // line 58
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["user"], "user_id", [], "any", false, false, false, 58), ($context["selected"] ?? null))) {
                    // line 59
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["user"], "user_id", [], "any", false, false, false, 59);
                    echo "\" checked=\"checked\"/>
                        ";
                } else {
                    // line 61
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["user"], "user_id", [], "any", false, false, false, 61);
                    echo "\"/>
                        ";
                }
                // line 62
                echo "</td>
                      <td class=\"text-left\">";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 63);
                echo "</td>
                      <td class=\"text-left\">";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 64);
                echo "</td>
                      <td class=\"text-left\">";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["user"], "date_added", [], "any", false, false, false, 65);
                echo "</td>
                      <td class=\"text-right\"><a href=\"";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["user"], "edit", [], "any", false, false, false, 66);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fas fa-pencil-alt\"></i></a></td>
                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                ";
        } else {
            // line 70
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"5\">";
            // line 71
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                ";
        }
        // line 74
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 79
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 80
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 86
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "user/user_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 86,  271 => 80,  267 => 79,  260 => 74,  254 => 71,  251 => 70,  248 => 69,  237 => 66,  233 => 65,  229 => 64,  225 => 63,  222 => 62,  216 => 61,  210 => 59,  208 => 58,  205 => 57,  200 => 56,  198 => 55,  191 => 51,  188 => 50,  180 => 49,  170 => 47,  168 => 46,  165 => 45,  157 => 44,  147 => 42,  145 => 41,  142 => 40,  134 => 39,  124 => 37,  122 => 36,  113 => 30,  108 => 28,  105 => 27,  97 => 23,  94 => 22,  86 => 18,  84 => 17,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/user_list.twig", "");
    }
}
