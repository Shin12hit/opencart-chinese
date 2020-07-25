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

/* marketplace/installer_extension.twig */
class __TwigTemplate_b98fc6f1b6291812ea10bc068e6f9652633e870c54055771cb0841aa5c9f8cf0 extends Template
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
        <td class=\"text-center\">";
        // line 5
        echo ($context["column_image"] ?? null);
        echo "</td>
        <td class=\"text-left\">";
        // line 6
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
        // line 7
        if ((0 === twig_compare(($context["sort"] ?? null), "version"))) {
            echo "<a href=\"";
            echo ($context["sort_version"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_version"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_version"] ?? null);
            echo "\">";
            echo ($context["column_version"] ?? null);
            echo "</a>";
        }
        echo "</td>
        <td class=\"text-left\">";
        // line 8
        if ((0 === twig_compare(($context["sort"] ?? null), "date_added"))) {
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
        // line 9
        echo ($context["column_action"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 13
        if (($context["extensions"] ?? null)) {
            // line 14
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 15
                echo "          <tr>
            <td class=\"text-center\"><a href=\"";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "link", [], "any", false, false, false, 16);
                echo "\" target=\"_blank\"><img src=\"https://image.opencart.com/cache/";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "image", [], "any", false, false, false, 16);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 16);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 16);
                echo "\" class=\"img-responsive\"/></a></td>
            <td class=\"text-left align-text-top\"><a href=\"";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "link", [], "any", false, false, false, 17);
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 17);
                echo "</a></td>
            <td class=\"text-left align-text-top\">";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "version", [], "any", false, false, false, 18);
                echo "</td>
            <td class=\"text-left align-text-top\">";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "date_added", [], "any", false, false, false, 19);
                echo "</td>
            <td class=\"text-right align-text-top\">";
                // line 20
                if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "status", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "                <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "install", [], "any", false, false, false, 21);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_install"] ?? null);
                    echo "\" class=\"btn btn-success\"><i class=\"fas fa-plus-circle\"></i></a>
                <a href=\"";
                    // line 22
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "delete", [], "any", false, false, false, 22);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_delete"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"far fa-trash-alt\"></i></a>
              ";
                } else {
                    // line 24
                    echo "                <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "uninstall", [], "any", false, false, false, 24);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_uninstall"] ?? null);
                    echo "\" class=\"btn btn-warning\"><i class=\"fas fa-minus-circle\"></i></a>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                    // line 25
                    echo ($context["button_delete"] ?? null);
                    echo "\" class=\"btn btn-danger\" disabled><i class=\"far fa-trash-alt\"></i></button>
              ";
                }
                // line 26
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "      ";
        } else {
            // line 30
            echo "        <tr>
          <td class=\"text-center\" colspan=\"5\">";
            // line 31
            echo ($context["text_no_results"] ?? null);
            echo "</td>
        </tr>
      ";
        }
        // line 34
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 38
        echo ($context["pagination"] ?? null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 39
        echo ($context["results"] ?? null);
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "marketplace/installer_extension.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 39,  196 => 38,  190 => 34,  184 => 31,  181 => 30,  178 => 29,  170 => 26,  165 => 25,  158 => 24,  151 => 22,  144 => 21,  142 => 20,  138 => 19,  134 => 18,  128 => 17,  118 => 16,  115 => 15,  110 => 14,  108 => 13,  101 => 9,  83 => 8,  65 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketplace/installer_extension.twig", "");
    }
}
