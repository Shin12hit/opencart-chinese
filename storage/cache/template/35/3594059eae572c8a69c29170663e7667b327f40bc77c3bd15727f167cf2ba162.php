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

/* customer/gdpr_list.twig */
class __TwigTemplate_6ebe8b901b271dc519a5ba3a037b7213cd43c3c53b7141ebb6439e78aa3f36de extends Template
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
        echo "<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').trigger('click');\"/></td>
        <td class=\"text-left\">";
        // line 6
        echo ($context["column_email"] ?? null);
        echo "</td>
        <td class=\"text-left\">";
        // line 7
        echo ($context["column_request"] ?? null);
        echo "</td>
        <td class=\"text-left\">";
        // line 8
        echo ($context["column_status"] ?? null);
        echo "</td>
        <td class=\"text-left\">";
        // line 9
        echo ($context["column_date_added"] ?? null);
        echo "</td>
        <td class=\"text-right\">";
        // line 10
        echo ($context["column_action"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 14
        if (($context["gdprs"] ?? null)) {
            // line 15
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["gdprs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["gdpr"]) {
                // line 16
                echo "          <tr>
            <td class=\"text-center\">";
                // line 17
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["gdpr"], "gdpr_id", [], "any", false, false, false, 17), ($context["selected"] ?? null))) {
                    // line 18
                    echo "                <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["gdpr"], "gdpr_id", [], "any", false, false, false, 18);
                    echo "\" checked=\"checked\"/>
              ";
                } else {
                    // line 20
                    echo "                <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["gdpr"], "gdpr_id", [], "any", false, false, false, 20);
                    echo "\"/>
              ";
                }
                // line 21
                echo "</td>
            <td class=\"text-left\">
              ";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["gdpr"], "edit", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "                <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["gdpr"], "edit", [], "any", false, false, false, 24);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["gdpr"], "email", [], "any", false, false, false, 24);
                    echo "</a>
              ";
                } else {
                    // line 26
                    echo "                ";
                    echo twig_get_attribute($this->env, $this->source, $context["gdpr"], "email", [], "any", false, false, false, 26);
                    echo "
              ";
                }
                // line 28
                echo "            </td>
            <td class=\"text-left\">";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["gdpr"], "action", [], "any", false, false, false, 29);
                echo "</td>
            <td class=\"text-left\">
              ";
                // line 31
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["gdpr"], "status", [], "any", false, false, false, 31), "-1"))) {
                    // line 32
                    echo "                <span class=\"badge badge-danger\">";
                    echo ($context["text_denied"] ?? null);
                    echo "</span>
              ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 33
$context["gdpr"], "status", [], "any", false, false, false, 33), "0"))) {
                    // line 34
                    echo "                <span class=\"badge badge-secondary\">";
                    echo ($context["text_unverified"] ?? null);
                    echo "</span>
              ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 35
$context["gdpr"], "status", [], "any", false, false, false, 35), "1"))) {
                    // line 36
                    echo "                <span class=\"badge badge-warning\">";
                    echo ($context["text_pending"] ?? null);
                    echo "</span>
              ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 37
$context["gdpr"], "status", [], "any", false, false, false, 37), "2"))) {
                    // line 38
                    echo "                <span class=\"badge badge-info\">";
                    echo ($context["text_processing"] ?? null);
                    echo "</span>
              ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 39
$context["gdpr"], "status", [], "any", false, false, false, 39), "3"))) {
                    // line 40
                    echo "                <span class=\"badge badge-success\">";
                    echo ($context["text_complete"] ?? null);
                    echo "</span>
              ";
                }
                // line 41
                echo "</td>
            <td class=\"text-left\">";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["gdpr"], "date_added", [], "any", false, false, false, 42);
                echo "</td>
            <td class=\"text-right\"><a href=\"";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["gdpr"], "approve", [], "any", false, false, false, 43);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_approve"] ?? null);
                echo "\" class=\"btn btn-success\"><i class=\"fas fa-check\"></i></a> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["gdpr"], "deny", [], "any", false, false, false, 43);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_deny"] ?? null);
                echo "\" class=\"btn btn-warning\"><i class=\"fas fa-times\"></i></a> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["gdpr"], "delete", [], "any", false, false, false, 43);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_delete"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fas fa-trash-alt\"></i></a></td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gdpr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "      ";
        } else {
            // line 47
            echo "        <tr>
          <td class=\"text-center\" colspan=\"6\">";
            // line 48
            echo ($context["text_no_results"] ?? null);
            echo "</td>
        </tr>
      ";
        }
        // line 51
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 55
        echo ($context["pagination"] ?? null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 56
        echo ($context["results"] ?? null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "customer/gdpr_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 56,  199 => 55,  193 => 51,  187 => 48,  184 => 47,  181 => 46,  162 => 43,  158 => 42,  155 => 41,  149 => 40,  147 => 39,  142 => 38,  140 => 37,  135 => 36,  133 => 35,  128 => 34,  126 => 33,  121 => 32,  119 => 31,  114 => 29,  111 => 28,  105 => 26,  97 => 24,  95 => 23,  91 => 21,  85 => 20,  79 => 18,  77 => 17,  74 => 16,  69 => 15,  67 => 14,  60 => 10,  56 => 9,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customer/gdpr_list.twig", "");
    }
}
