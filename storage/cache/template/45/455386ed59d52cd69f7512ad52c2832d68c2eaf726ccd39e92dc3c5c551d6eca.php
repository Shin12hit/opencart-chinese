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

/* catalog/filter_form.twig */
class __TwigTemplate_746fc8513d340ffbd9788416a9e563bb3d419d05b6cc04532df01e86ec9b67de extends Template
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
        <button type=\"submit\" form=\"form-filter\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-reply\"></i></a></div>
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
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 23
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 25
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-filter\">
          <fieldset id=\"option-value\">
            <legend>";
        // line 27
        echo ($context["text_group"] ?? null);
        echo "</legend>
            <div class=\"form-group row required\">
              <label class=\"col-sm-2 col-form-label\">";
        // line 29
        echo ($context["entry_group"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 32
            echo "                  <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                      <span class=\"input-group-text\"><img src=\"language/";
            // line 34
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 34);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 34);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 34);
            echo "\"/></span>
                    </div>
                    <input type=\"text\" name=\"filter_group_description[";
            // line 36
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 36);
            echo "][name]\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["filter_group_description"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 36)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["filter_group_description"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 36)] ?? null) : null), "name", [], "any", false, false, false, 36)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_group"] ?? null);
            echo "\" class=\"form-control\"/>
                  </div>
                  ";
            // line 38
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_group"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 38)] ?? null) : null)) {
                // line 39
                echo "                    <div class=\"invalid-tooltip\">";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_group"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 39)] ?? null) : null);
                echo "</div>
                  ";
            }
            // line 41
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "              </div>
            </div>
            <div class=\"form-group row\">
              <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 45
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"sort_order\" value=\"";
        // line 47
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
              </div>
            </div>
          </fieldset>
          <fieldset id=\"option-value\">
            <legend>";
        // line 52
        echo ($context["text_value"] ?? null);
        echo "</legend>
            <table id=\"filter\" class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left required\">";
        // line 56
        echo ($context["entry_name"] ?? null);
        echo "</td>
                  <td class=\"text-right\">";
        // line 57
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 62
        $context["filter_row"] = 0;
        // line 63
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            // line 64
            echo "                  <tr id=\"filter-row";
            echo ($context["filter_row"] ?? null);
            echo "\">
                    <td class=\"text-left\" style=\"width: 70%;\"><input type=\"hidden\" name=\"filter[";
            // line 65
            echo ($context["filter_row"] ?? null);
            echo "][filter_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 65);
            echo "\"/>
                      ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 67
                echo "                        <div class=\"input-group\">
                          <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\"><img src=\"language/";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 69);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 69);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 69);
                echo "\"/></span>
                          </div>
                          <input type=\"text\" name=\"filter[";
                // line 71
                echo ($context["filter_row"] ?? null);
                echo "][filter_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 71);
                echo "][name]\" value=\"";
                echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["filter"], "filter_description", [], "any", false, false, false, 71)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 71)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["filter"], "filter_description", [], "any", false, false, false, 71)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 71)] ?? null) : null), "name", [], "any", false, false, false, 71)) : (""));
                echo "\" placeholder=\"";
                echo ($context["entry_name"] ?? null);
                echo "\" class=\"form-control\"/>
                        </div>
                        ";
                // line 73
                if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error_filter"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["filter_row"] ?? null)] ?? null) : null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73)] ?? null) : null)) {
                    // line 74
                    echo "                          <div class=\"invalid-tooltip\">";
                    echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["error_filter"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[($context["filter_row"] ?? null)] ?? null) : null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74)] ?? null) : null);
                    echo "</div>
                        ";
                }
                // line 76
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                    <td class=\"text-right\"><input type=\"text\" name=\"filter[";
            // line 77
            echo ($context["filter_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["filter"], "sort_order", [], "any", false, false, false, 77);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\" id=\"input-sort-order\" class=\"form-control\"/></td>
                    <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#filter-row";
            // line 78
            echo ($context["filter_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 80
            $context["filter_row"] = (($context["filter_row"] ?? null) + 1);
            // line 81
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"2\"></td>
                  <td class=\"text-right\"><button type=\"button\" onclick=\"addFilterRow();\" data-toggle=\"tooltip\" title=\"";
        // line 86
        echo ($context["button_filter_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
var filter_row = ";
        // line 97
        echo ($context["filter_row"] ?? null);
        echo ";

function addFilterRow() {
\thtml = '<tr id=\"filter-row' + filter_row + '\">';
\thtml += '  <td class=\"text-left\" style=\"width: 70%;\"><input type=\"hidden\" name=\"filter[' + filter_row + '][filter_id]\" value=\"\"/>';
  ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 103
            echo "\thtml += '  <div class=\"input-group\">';
\thtml += '    <div class=\"input-group-prepend\">';
\thtml += '      <span class=\"input-group-text\"><img src=\"language/";
            // line 105
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 105);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 105);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 105);
            echo "\" /></span>';
\thtml += '    </div>';
\thtml += '    <input type=\"text\" name=\"filter[' + filter_row + '][filter_description][";
            // line 107
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 107);
            echo "][name]\" value=\"\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" class=\"form-control\" />';
\thtml += '  </div>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "\thtml += '  </td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"filter[' + filter_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 111
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#filter-row' + filter_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 112
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#filter tbody').append(html);

\tfilter_row++;
}

//--></script>
";
        // line 121
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "catalog/filter_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 121,  342 => 112,  338 => 111,  335 => 110,  324 => 107,  315 => 105,  311 => 103,  307 => 102,  299 => 97,  285 => 86,  279 => 82,  273 => 81,  271 => 80,  264 => 78,  256 => 77,  248 => 76,  242 => 74,  240 => 73,  229 => 71,  220 => 69,  216 => 67,  212 => 66,  206 => 65,  201 => 64,  196 => 63,  194 => 62,  186 => 57,  182 => 56,  175 => 52,  165 => 47,  160 => 45,  155 => 42,  149 => 41,  143 => 39,  141 => 38,  132 => 36,  123 => 34,  119 => 32,  115 => 31,  110 => 29,  105 => 27,  100 => 25,  95 => 23,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/filter_form.twig", "");
    }
}
