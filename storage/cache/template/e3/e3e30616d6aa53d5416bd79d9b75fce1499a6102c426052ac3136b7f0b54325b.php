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

/* catalog/product_form.twig */
class __TwigTemplate_677b38138094d2abf95170f374c6fb8d11697af678ed5b4e7c1337265d2f7180 extends Template
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
        <button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 6
        echo ($context["action"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
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
        ";
        // line 25
        if (($context["master_id"] ?? null)) {
            // line 26
            echo "          <div class=\"alert alert-warning\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo ($context["text_variant"] ?? null);
            echo "</div>
        ";
        }
        // line 28
        echo "        <form method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-toggle=\"tab\" class=\"nav-link active\">";
        // line 30
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-data\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 31
        echo ($context["tab_data"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-links\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 32
        echo ($context["tab_links"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-attribute\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 33
        echo ($context["tab_attribute"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 34
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-recurring\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 35
        echo ($context["tab_recurring"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-discount\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 36
        echo ($context["tab_discount"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-special\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 37
        echo ($context["tab_special"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 38
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-reward\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 39
        echo ($context["tab_reward"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-seo\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 40
        echo ($context["tab_seo"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-design\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 41
        echo ($context["tab_design"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 47
            echo "                  <li class=\"nav-item\"><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 47);
            echo "\" data-toggle=\"tab\" class=\"nav-link\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 47);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 47);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 47);
            echo "\"/> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 47);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "              </ul>
              <div class=\"tab-content\">
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 52
            echo "                  <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 52);
            echo "\">
                    <div class=\"form-group row required\">
                      <label for=\"input-name";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_name"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57);
            echo "][name]\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["product_description"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["product_description"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57)] ?? null) : null), "name", [], "any", false, false, false, 57)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"input-name";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57);
            echo "\" class=\"form-control\"/>
                          ";
            // line 58
            if (($context["master_id"] ?? null)) {
                // line 59
                echo "                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\">
                                <div class=\"custom-control custom-switch\">
                                  ";
                // line 62
                if (twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 62)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 62)] ?? null) : null), "name", [], "any", false, false, false, 62)) {
                    // line 63
                    echo "                                    <input type=\"checkbox\" name=\"override[product_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63);
                    echo "][name]\" value=\"1\" id=\"input-variant-name";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63);
                    echo "\" data-toggle=\"switch\" data-target=\"#input-name";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63);
                    echo "\" class=\"custom-control-input\" checked/>
                                  ";
                } else {
                    // line 65
                    echo "                                    <input type=\"checkbox\" name=\"override[product_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 65);
                    echo "][name]\" value=\"1\" id=\"input-variant-name";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 65);
                    echo "\" data-toggle=\"switch\" data-target=\"#input-name";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 65);
                    echo "\" class=\"custom-control-input\"/>
                                  ";
                }
                // line 67
                echo "                                  <label for=\"input-variant-name";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67);
                echo "\" class=\"custom-control-label\"></label>
                                </div>
                              </div>
                            </div>
                          ";
            }
            // line 72
            echo "                        </div>
                        ";
            // line 73
            if ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_name"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73)] ?? null) : null)) {
                // line 74
                echo "                          <div class=\"invalid-tooltip\">";
                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["error_name"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74)] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 76
            echo "                      </div>
                    </div>
                    <div class=\"form-group row\">
                      <label for=\"input-description";
            // line 79
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 79);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <div class=\"form-control h-100 p-0 border-0 rounded-0\">
                            <textarea name=\"product_description[";
            // line 83
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 83);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 83);
            echo "\" data-toggle=\"ckeditor\" data-lang=\"";
            echo ($context["ckeditor"] ?? null);
            echo "\" class=\"w-100 position-relative\">";
            echo (((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["product_description"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 83)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["product_description"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 83)] ?? null) : null), "description", [], "any", false, false, false, 83)) : (""));
            echo "</textarea>
                          </div>
                          ";
            // line 85
            if (($context["master_id"] ?? null)) {
                // line 86
                echo "                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\">
                                <div class=\"custom-control custom-switch\">
                                  ";
                // line 89
                if (twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 89)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 89)] ?? null) : null), "description", [], "any", false, false, false, 89)) {
                    // line 90
                    echo "                                    <input type=\"checkbox\" name=\"override[product_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 90);
                    echo "][description]\" value=\"1\" id=\"input-variant-description";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 90);
                    echo "\" data-toggle=\"switch\" data-target=\"#input-description";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 90);
                    echo "\" class=\"custom-control-input\" checked/>
                                  ";
                } else {
                    // line 92
                    echo "                                    <input type=\"checkbox\" name=\"override[product_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92);
                    echo "][description]\" value=\"1\" id=\"input-variant-description";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92);
                    echo "\" data-toggle=\"switch\" data-target=\"#input-description";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92);
                    echo "\" class=\"custom-control-input\"/>
                                  ";
                }
                // line 94
                echo "                                  <label for=\"input-variant-description";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 94);
                echo "\" class=\"custom-control-label\"></label>
                                </div>
                              </div>
                            </div>
                          ";
            }
            // line 99
            echo "                        </div>
                      </div>
                    </div>
                    <div class=\"form-group row required\">
                      <label for=\"input-meta-title";
            // line 103
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 103);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[";
            // line 106
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 106);
            echo "][meta_title]\" value=\"";
            echo (((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["product_description"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 106)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["product_description"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 106)] ?? null) : null), "meta_title", [], "any", false, false, false, 106)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_meta_title"] ?? null);
            echo "\" id=\"input-meta-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 106);
            echo "\" class=\"form-control\"/>
                          ";
            // line 107
            if (($context["master_id"] ?? null)) {
                // line 108
                echo "                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\">
                                <div class=\"custom-control custom-switch\">
                                  ";
                // line 111
                if (twig_get_attribute($this->env, $this->source, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 111)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 111)] ?? null) : null), "meta_title", [], "any", false, false, false, 111)) {
                    // line 112
                    echo "                                    <input type=\"checkbox\" name=\"override[product_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 112);
                    echo "][meta_title]\" value=\"1\" id=\"input-variant-meta-title";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 112);
                    echo "\" data-toggle=\"switch\" data-target=\"#input-meta-title";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 112);
                    echo "\" class=\"custom-control-input\" checked/>
                                  ";
                } else {
                    // line 114
                    echo "                                    <input type=\"checkbox\" name=\"override[product_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 114);
                    echo "][meta_title]\" value=\"1\" id=\"input-variant-meta-title";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 114);
                    echo "\" data-toggle=\"switch\" data-target=\"#input-meta-title";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 114);
                    echo "\" class=\"custom-control-input\"/>
                                  ";
                }
                // line 116
                echo "                                  <label for=\"input-variant-meta-title";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 116);
                echo "\" class=\"custom-control-label\"></label>
                                </div>
                              </div>
                            </div>
                          ";
            }
            // line 121
            echo "                        </div>
                        ";
            // line 122
            if ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["error_meta_title"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 122)] ?? null) : null)) {
                // line 123
                echo "                          <div class=\"invalid-tooltip\">";
                echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["error_meta_title"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 123)] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 125
            echo "                      </div>
                    </div>
                    <div class=\"form-group row\">
                      <label for=\"input-meta-description";
            // line 128
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 128);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <textarea name=\"product_description[";
            // line 131
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 131);
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_description"] ?? null);
            echo "\" id=\"input-meta-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 131);
            echo "\" class=\"form-control\">";
            echo (((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["product_description"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 131)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["product_description"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 131)] ?? null) : null), "meta_description", [], "any", false, false, false, 131)) : (""));
            echo "</textarea>
                          ";
            // line 132
            if (($context["master_id"] ?? null)) {
                // line 133
                echo "                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\">
                                <div class=\"custom-control custom-switch\">
                                  ";
                // line 136
                if (twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 136)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 136)] ?? null) : null), "meta_description", [], "any", false, false, false, 136)) {
                    // line 137
                    echo "                                    <input type=\"checkbox\" name=\"override[product_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 137);
                    echo "][meta_description]\" value=\"1\" id=\"input-variant-meta-description";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 137);
                    echo "\" data-toggle=\"switch\" data-target=\"#input-meta-description";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 137);
                    echo "\" class=\"custom-control-input\" checked/>
                                  ";
                } else {
                    // line 139
                    echo "                                    <input type=\"checkbox\" name=\"override[product_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 139);
                    echo "][meta_description]\" value=\"1\" id=\"input-variant-meta-description";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 139);
                    echo "\" data-toggle=\"switch\" data-target=\"#input-meta-description";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 139);
                    echo "\" class=\"custom-control-input\"/>
                                  ";
                }
                // line 141
                echo "                                  <label for=\"input-variant-meta-description";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 141);
                echo "\" class=\"custom-control-label\"></label>
                                </div>
                              </div>
                            </div>
                          ";
            }
            // line 146
            echo "                        </div>
                      </div>
                    </div>
                    <div class=\"form-group row\">
                      <label for=\"input-meta-keyword";
            // line 150
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 150);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <textarea name=\"product_description[";
            // line 153
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 153);
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 153);
            echo "\" class=\"form-control\">";
            echo (((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["product_description"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 153)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["product_description"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 153)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 153)) : (""));
            echo "</textarea>
                          ";
            // line 154
            if (($context["master_id"] ?? null)) {
                // line 155
                echo "                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\">
                                <div class=\"custom-control custom-switch\">
                                  ";
                // line 158
                if (twig_get_attribute($this->env, $this->source, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 158)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 158)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 158)) {
                    // line 159
                    echo "                                    <input type=\"checkbox\" name=\"override[product_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 159);
                    echo "][meta_keyword]\" value=\"1\" id=\"input-variant-meta-keyword";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 159);
                    echo "\" data-toggle=\"switch\" data-target=\"#input-meta-keyword";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 159);
                    echo "\" class=\"custom-control-input\" checked/>
                                  ";
                } else {
                    // line 161
                    echo "                                    <input type=\"checkbox\" name=\"override[product_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 161);
                    echo "][meta_keyword]\" value=\"1\" id=\"input-variant-meta-keyword";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 161);
                    echo "\" data-toggle=\"switch\" data-target=\"#input-meta-keyword";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 161);
                    echo "\" class=\"custom-control-input\"/>
                                  ";
                }
                // line 163
                echo "                                  <label for=\"input-variant-meta-keyword";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 163);
                echo "\" class=\"custom-control-label\"></label>
                                </div>
                              </div>
                            </div>
                          ";
            }
            // line 168
            echo "                        </div>
                      </div>
                    </div>
                    <div class=\"form-group row\">
                      <label for=\"input-tag";
            // line 172
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 172);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_tag"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[";
            // line 175
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 175);
            echo "][tag]\" value=\"";
            echo (((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["product_description"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 175)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["product_description"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 175)] ?? null) : null), "tag", [], "any", false, false, false, 175)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_tag"] ?? null);
            echo "\" id=\"input-tag";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 175);
            echo "\" class=\"form-control\"/>
                          ";
            // line 176
            if (($context["master_id"] ?? null)) {
                // line 177
                echo "                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\">
                                <div class=\"custom-control custom-switch\">
                                  ";
                // line 180
                if (twig_get_attribute($this->env, $this->source, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 180)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 180)] ?? null) : null), "tag", [], "any", false, false, false, 180)) {
                    // line 181
                    echo "                                    <input type=\"checkbox\" name=\"override[product_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 181);
                    echo "][tag]\" value=\"1\" id=\"input-variant-tag";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 181);
                    echo "\" data-toggle=\"switch\" data-target=\"#input-tag";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 181);
                    echo "\" class=\"custom-control-input\" checked/>
                                  ";
                } else {
                    // line 183
                    echo "                                    <input type=\"checkbox\" name=\"override[product_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 183);
                    echo "][tag]\" value=\"1\" id=\"input-variant-tag";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 183);
                    echo "\" data-toggle=\"switch\" data-target=\"#input-tag";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 183);
                    echo "\" class=\"custom-control-input\"/>
                                  ";
                }
                // line 185
                echo "                                  <label for=\"input-variant-tag";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 185);
                echo "\" class=\"custom-control-label\"></label>
                                </div>
                              </div>
                            </div>
                          ";
            }
            // line 190
            echo "                        </div>
                        <small class=\"form-text text-muted\">";
            // line 191
            echo ($context["help_tag"] ?? null);
            echo "</small>
                      </div>
                    </div>
                  </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "              </div>
            </div>
            <div id=\"tab-data\" class=\"tab-pane\">
              <input type=\"hidden\" name=\"master_id\" value=\"";
        // line 199
        echo ($context["master_id"] ?? null);
        echo "\"/>
              <fieldset>
                <legend>";
        // line 201
        echo ($context["text_model"] ?? null);
        echo "</legend>
                <div class=\"form-group row required\">
                  <label for=\"input-model\" class=\"col-sm-2 col-form-label\">";
        // line 203
        echo ($context["entry_model"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"model\" value=\"";
        // line 206
        echo ($context["model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
                      ";
        // line 207
        if (($context["master_id"] ?? null)) {
            // line 208
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 211
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "model", [], "any", false, false, false, 211)) {
                // line 212
                echo "                                <input type=\"checkbox\" name=\"override[model]\" value=\"1\" id=\"input-variant-model\" data-toggle=\"switch\" data-target=\"#input-model\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 214
                echo "                                <input type=\"checkbox\" name=\"override[model]\" value=\"1\" id=\"input-variant-model\" data-toggle=\"switch\" data-target=\"#input-model\" class=\"custom-control-input\"/>
                              ";
            }
            // line 216
            echo "                              <label for=\"input-variant-model\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 221
        echo "                    </div>
                    ";
        // line 222
        if (($context["error_model"] ?? null)) {
            // line 223
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_model"] ?? null);
            echo "</div>
                    ";
        }
        // line 225
        echo "                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-sku\" class=\"col-sm-2 col-form-label\">";
        // line 228
        echo ($context["entry_sku"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"sku\" value=\"";
        // line 231
        echo ($context["sku"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sku"] ?? null);
        echo "\" id=\"input-sku\" class=\"form-control\"/>
                      ";
        // line 232
        if (($context["master_id"] ?? null)) {
            // line 233
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 236
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "sku", [], "any", false, false, false, 236)) {
                // line 237
                echo "                                <input type=\"checkbox\" name=\"override[sku]\" value=\"1\" id=\"input-variant-sku\" data-toggle=\"switch\" data-target=\"#input-sku\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 239
                echo "                                <input type=\"checkbox\" name=\"override[sku]\" value=\"1\" id=\"input-variant-sku\" data-toggle=\"switch\" data-target=\"#input-sku\" class=\"custom-control-input\"/>
                              ";
            }
            // line 241
            echo "                              <label for=\"input-variant-sku\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 246
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 247
        echo ($context["help_sku"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-upc\" class=\"col-sm-2 col-form-label\">";
        // line 251
        echo ($context["entry_upc"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"upc\" value=\"";
        // line 254
        echo ($context["upc"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_upc"] ?? null);
        echo "\" id=\"input-upc\" class=\"form-control\"/>
                      ";
        // line 255
        if (($context["master_id"] ?? null)) {
            // line 256
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 259
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "upc", [], "any", false, false, false, 259)) {
                // line 260
                echo "                                <input type=\"checkbox\" name=\"override[upc]\" value=\"1\" id=\"input-variant-upc\" data-toggle=\"switch\" data-target=\"#input-upc\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 262
                echo "                                <input type=\"checkbox\" name=\"override[upc]\" value=\"1\" id=\"input-variant-upc\" data-toggle=\"switch\" data-target=\"#input-upc\" class=\"custom-control-input\"/>
                              ";
            }
            // line 264
            echo "                              <label for=\"input-variant-upc\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 269
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 270
        echo ($context["help_upc"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-ean\" class=\"col-sm-2 col-form-label\">";
        // line 274
        echo ($context["entry_ean"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"ean\" value=\"";
        // line 277
        echo ($context["ean"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_ean"] ?? null);
        echo "\" id=\"input-ean\" class=\"form-control\"/>
                      ";
        // line 278
        if (($context["master_id"] ?? null)) {
            // line 279
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 282
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "ean", [], "any", false, false, false, 282)) {
                // line 283
                echo "                                <input type=\"checkbox\" name=\"override[ean]\" value=\"1\" id=\"input-variant-ean\" data-toggle=\"switch\" data-target=\"#input-ean\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 285
                echo "                                <input type=\"checkbox\" name=\"override[ean]\" value=\"1\" id=\"input-variant-ean\" data-toggle=\"switch\" data-target=\"#input-ean\" class=\"custom-control-input\"/>
                              ";
            }
            // line 287
            echo "                              <label for=\"input-variant-ean\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 292
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 293
        echo ($context["help_ean"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-jan\" class=\"col-sm-2 col-form-label\">";
        // line 297
        echo ($context["entry_jan"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"jan\" value=\"";
        // line 300
        echo ($context["jan"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_jan"] ?? null);
        echo "\" id=\"input-jan\" class=\"form-control\"/>
                      ";
        // line 301
        if (($context["master_id"] ?? null)) {
            // line 302
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 305
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "jan", [], "any", false, false, false, 305)) {
                // line 306
                echo "                                <input type=\"checkbox\" name=\"override[jan]\" value=\"1\" id=\"input-variant-jan\" data-toggle=\"switch\" data-target=\"#input-jan\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 308
                echo "                                <input type=\"checkbox\" name=\"override[jan]\" value=\"1\" id=\"input-variant-jan\" data-toggle=\"switch\" data-target=\"#input-jan\" class=\"custom-control-input\"/>
                              ";
            }
            // line 310
            echo "                              <label for=\"input-variant-jan\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 315
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 316
        echo ($context["help_jan"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-isbn\" class=\"col-sm-2 col-form-label\">";
        // line 320
        echo ($context["entry_isbn"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"isbn\" value=\"";
        // line 323
        echo ($context["isbn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_isbn"] ?? null);
        echo "\" id=\"input-isbn\" class=\"form-control\"/>
                      ";
        // line 324
        if (($context["master_id"] ?? null)) {
            // line 325
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 328
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "isbn", [], "any", false, false, false, 328)) {
                // line 329
                echo "                                <input type=\"checkbox\" name=\"override[isbn]\" value=\"1\" id=\"input-variant-isbn\" data-toggle=\"switch\" data-target=\"#input-isbn\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 331
                echo "                                <input type=\"checkbox\" name=\"override[isbn]\" value=\"1\" id=\"input-variant-isbn\" data-toggle=\"switch\" data-target=\"#input-isbn\" class=\"custom-control-input\"/>
                              ";
            }
            // line 333
            echo "                              <label for=\"input-variant-isbn\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 338
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 339
        echo ($context["help_isbn"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-mpn\" class=\"col-sm-2 col-form-label\">";
        // line 343
        echo ($context["entry_mpn"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"mpn\" value=\"";
        // line 346
        echo ($context["mpn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mpn"] ?? null);
        echo "\" id=\"input-mpn\" class=\"form-control\"/>
                      ";
        // line 347
        if (($context["master_id"] ?? null)) {
            // line 348
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 351
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "mpn", [], "any", false, false, false, 351)) {
                // line 352
                echo "                                <input type=\"checkbox\" name=\"override[mpn]\" value=\"1\" id=\"input-variant-mpn\" data-toggle=\"switch\" data-target=\"#input-mpn\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 354
                echo "                                <input type=\"checkbox\" name=\"override[mpn]\" value=\"1\" id=\"input-variant-mpn\" data-toggle=\"switch\" data-target=\"#input-mpn\" class=\"custom-control-input\"/>
                              ";
            }
            // line 356
            echo "                              <label for=\"input-variant-mpn\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 361
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 362
        echo ($context["help_mpn"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-location\" class=\"col-sm-2 col-form-label\">";
        // line 366
        echo ($context["entry_location"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"location\" value=\"";
        // line 369
        echo ($context["location"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_location"] ?? null);
        echo "\" id=\"input-location\" class=\"form-control\"/>
                      ";
        // line 370
        if (($context["master_id"] ?? null)) {
            // line 371
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 374
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "location", [], "any", false, false, false, 374)) {
                // line 375
                echo "                                <input type=\"checkbox\" name=\"override[location]\" value=\"1\" id=\"input-variant-location\" data-toggle=\"switch\" data-target=\"#input-location\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 377
                echo "                                <input type=\"checkbox\" name=\"override[location]\" value=\"1\" id=\"input-variant-location\" data-toggle=\"switch\" data-target=\"#input-location\" class=\"custom-control-input\"/>
                              ";
            }
            // line 379
            echo "                              <label for=\"input-variant-location\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 384
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 389
        echo ($context["text_price"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label for=\"input-price\" class=\"col-sm-2 col-form-label\">";
        // line 391
        echo ($context["entry_price"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"price\" value=\"";
        // line 394
        echo ($context["price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_price"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\"/>
                      ";
        // line 395
        if (($context["master_id"] ?? null)) {
            // line 396
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 399
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "price", [], "any", false, false, false, 399)) {
                // line 400
                echo "                                <input type=\"checkbox\" name=\"override[price]\" value=\"1\" id=\"input-variant-price\" data-toggle=\"switch\" data-target=\"#input-price\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 402
                echo "                                <input type=\"checkbox\" name=\"override[price]\" value=\"1\" id=\"input-variant-price\" data-toggle=\"switch\" data-target=\"#input-price\" class=\"custom-control-input\"/>
                              ";
            }
            // line 404
            echo "                              <label for=\"input-variant-price\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 409
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-tax-class\" class=\"col-sm-2 col-form-label\">";
        // line 413
        echo ($context["entry_tax_class"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                        <option value=\"0\">";
        // line 417
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 418
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 419
            echo "                          ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 419), ($context["tax_class_id"] ?? null)))) {
                // line 420
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 420);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 420);
                echo "</option>
                          ";
            } else {
                // line 422
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 422);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 422);
                echo "</option>
                          ";
            }
            // line 424
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 425
        echo "                      </select>
                      ";
        // line 426
        if (($context["master_id"] ?? null)) {
            // line 427
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 430
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "tax_class_id", [], "any", false, false, false, 430)) {
                // line 431
                echo "                                <input type=\"checkbox\" name=\"override[tax_class_id]\" value=\"1\" id=\"input-variant-tax-class\" data-toggle=\"switch\" data-target=\"#input-tax-class\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 433
                echo "                                <input type=\"checkbox\" name=\"override[tax_class_id]\" value=\"1\" id=\"input-variant-tax-class\" data-toggle=\"switch\" data-target=\"#input-tax-class\" class=\"custom-control-input\"/>
                              ";
            }
            // line 435
            echo "                              <label for=\"input-variant-tax-class\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 440
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 445
        echo ($context["text_stock"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label for=\"input-quantity\" class=\"col-sm-2 col-form-label\">";
        // line 447
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"quantity\" value=\"";
        // line 449
        echo ($context["quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-minimum\" class=\"col-sm-2 col-form-label\">";
        // line 453
        echo ($context["entry_minimum"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"minimum\" value=\"";
        // line 456
        echo ($context["minimum"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_minimum"] ?? null);
        echo "\" id=\"input-minimum\" class=\"form-control\"/>
                      ";
        // line 457
        if (($context["master_id"] ?? null)) {
            // line 458
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 461
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "minimum", [], "any", false, false, false, 461)) {
                // line 462
                echo "                                <input type=\"checkbox\" name=\"override[minimum]\" value=\"1\" id=\"input-variant-minimum\" data-toggle=\"switch\" data-target=\"#input-minimum\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 464
                echo "                                <input type=\"checkbox\" name=\"override[minimum]\" value=\"1\" id=\"input-variant-minimum\" data-toggle=\"switch\" data-target=\"#input-minimum\" class=\"custom-control-input\"/>
                              ";
            }
            // line 466
            echo "                              <label for=\"input-variant-minimum\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 471
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 472
        echo ($context["help_minimum"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 476
        echo ($context["entry_subtract"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\" id=\"input-subtract\">
                        ";
        // line 480
        if (($context["subtract"] ?? null)) {
            // line 481
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"subtract\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"subtract\" value=\"0\"/> ";
            // line 482
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 484
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"subtract\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"subtract\" value=\"0\" checked=\"checked\"/> ";
            // line 485
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 487
        echo "                      </div>
                      ";
        // line 488
        if (($context["master_id"] ?? null)) {
            // line 489
            echo "                        <div class=\"input-group-append align-items-center\">
                          <div class=\"custom-control custom-switch\">
                            ";
            // line 491
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "subtract", [], "any", false, false, false, 491)) {
                // line 492
                echo "                              <input type=\"checkbox\" name=\"override[subtract]\" value=\"1\" id=\"input-variant-subtract\" data-toggle=\"switch\" data-target=\"#input-subtract\" class=\"custom-control-input\" checked/>
                            ";
            } else {
                // line 494
                echo "                              <input type=\"checkbox\" name=\"override[subtract]\" value=\"1\" id=\"input-variant-subtract\" data-toggle=\"switch\" data-target=\"#input-subtract\" class=\"custom-control-input\"/>
                            ";
            }
            // line 496
            echo "                            <label for=\"input-variant-subtract\" class=\"custom-control-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 500
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-stock-status\" class=\"col-sm-2 col-form-label\">";
        // line 504
        echo ($context["entry_stock_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">
                        ";
        // line 508
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 509
            echo "                          ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 509), ($context["stock_status_id"] ?? null)))) {
                // line 510
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 510);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 510);
                echo "</option>
                          ";
            } else {
                // line 512
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 512);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 512);
                echo "</option>
                          ";
            }
            // line 514
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 515
        echo "                      </select>
                      ";
        // line 516
        if (($context["master_id"] ?? null)) {
            // line 517
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 520
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "stock_status_id", [], "any", false, false, false, 520)) {
                // line 521
                echo "                                <input type=\"checkbox\" name=\"override[stock_status_id]\" value=\"1\" id=\"input-variant-stock-status\" data-toggle=\"switch\" data-target=\"#input-stock-status\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 523
                echo "                                <input type=\"checkbox\" name=\"override[stock_status_id]\" value=\"1\" id=\"input-variant-stock-status\" data-toggle=\"switch\" data-target=\"#input-stock-status\" class=\"custom-control-input\"/>
                              ";
            }
            // line 525
            echo "                              <label for=\"input-variant-stock-status\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 530
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 531
        echo ($context["help_stock_status"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-date-available\" class=\"col-sm-2 col-form-label\">";
        // line 535
        echo ($context["entry_date_available"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10 col-md-4\">
                    <div class=\"input-group date\">
                      <input type=\"text\" name=\"date_available\" value=\"";
        // line 538
        echo ($context["date_available"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_available"] ?? null);
        echo "\" id=\"input-date-available\" class=\"form-control\"/>
                      <div class=\"input-group-append\">
                        <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                      </div>
                      ";
        // line 542
        if (($context["master_id"] ?? null)) {
            // line 543
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 546
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "date_available", [], "any", false, false, false, 546)) {
                // line 547
                echo "                                <input type=\"checkbox\" name=\"override[date_available]\" value=\"1\" id=\"input-variant-date-available\" data-toggle=\"switch\" data-target=\"#input-date-available\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 549
                echo "                                <input type=\"checkbox\" name=\"override[date_available]\" value=\"1\" id=\"input-variant-date-available\" data-toggle=\"switch\" data-target=\"#input-date-available\" class=\"custom-control-input\"/>
                              ";
            }
            // line 551
            echo "                              <label for=\"input-variant-date-available\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 556
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 561
        echo ($context["text_specification"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 563
        echo ($context["entry_shipping"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\" id=\"input-shipping\">
                        ";
        // line 567
        if (($context["shipping"] ?? null)) {
            // line 568
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"shipping\" value=\"0\"/> ";
            // line 569
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 571
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"shipping\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\"/> ";
            // line 572
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 574
        echo "                      </div>
                      ";
        // line 575
        if (($context["master_id"] ?? null)) {
            // line 576
            echo "                        <div class=\"input-group-append align-items-center\">
                          <div class=\"custom-control custom-switch\">
                            ";
            // line 578
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "shipping", [], "any", false, false, false, 578)) {
                // line 579
                echo "                              <input type=\"checkbox\" name=\"override[shipping]\" value=\"1\" id=\"input-variant-shipping\" data-toggle=\"switch\" data-target=\"#input-shipping\" class=\"custom-control-input\" checked/>
                            ";
            } else {
                // line 581
                echo "                              <input type=\"checkbox\" name=\"override[shipping]\" value=\"1\" id=\"input-variant-shipping\" data-toggle=\"switch\" data-target=\"#input-shipping\" class=\"custom-control-input\"/>
                            ";
            }
            // line 583
            echo "                            <label for=\"input-variant-shipping\" class=\"custom-control-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 587
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-length\" class=\"col-sm-2 col-form-label\">";
        // line 591
        echo ($context["entry_dimension"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"length\" value=\"";
        // line 594
        echo ($context["length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_length"] ?? null);
        echo "\" id=\"input-length\" class=\"form-control\"/>
                      ";
        // line 595
        if (($context["master_id"] ?? null)) {
            // line 596
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 599
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "length", [], "any", false, false, false, 599)) {
                // line 600
                echo "                                <input type=\"checkbox\" name=\"override[length]\" value=\"1\" id=\"input-variant-length\" data-toggle=\"switch\" data-target=\"#input-length\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 602
                echo "                                <input type=\"checkbox\" name=\"override[length]\" value=\"1\" id=\"input-variant-length\" data-toggle=\"switch\" data-target=\"#input-length\" class=\"custom-control-input\"/>
                              ";
            }
            // line 604
            echo "                              <label for=\"input-variant-length\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 609
        echo "                      <input type=\"text\" name=\"width\" value=\"";
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\"/>
                      ";
        // line 610
        if (($context["master_id"] ?? null)) {
            // line 611
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 614
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "width", [], "any", false, false, false, 614)) {
                // line 615
                echo "                                <input type=\"checkbox\" name=\"override[width]\" value=\"1\" id=\"input-variant-width\" data-toggle=\"switch\" data-target=\"#input-width\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 617
                echo "                                <input type=\"checkbox\" name=\"override[width]\" value=\"1\" id=\"input-variant-width\" data-toggle=\"switch\" data-target=\"#input-width\" class=\"custom-control-input\"/>
                              ";
            }
            // line 619
            echo "                              <label for=\"input-variant-width\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 624
        echo "                      <input type=\"text\" name=\"height\" value=\"";
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\"/>
                      ";
        // line 625
        if (($context["master_id"] ?? null)) {
            // line 626
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 629
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "height", [], "any", false, false, false, 629)) {
                // line 630
                echo "                                <input type=\"checkbox\" name=\"override[height]\" value=\"1\" id=\"input-variant-height\" data-toggle=\"switch\" data-target=\"#input-height\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 632
                echo "                                <input type=\"checkbox\" name=\"override[height]\" value=\"1\" id=\"input-variant-height\" data-toggle=\"switch\" data-target=\"#input-height\" class=\"custom-control-input\"/>
                              ";
            }
            // line 634
            echo "                              <label for=\"input-variant-height\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 639
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">";
        // line 643
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">
                        ";
        // line 647
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 648
            echo "                          ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 648), ($context["length_class_id"] ?? null)))) {
                // line 649
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 649);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 649);
                echo "</option>
                          ";
            } else {
                // line 651
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 651);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 651);
                echo "</option>
                          ";
            }
            // line 653
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 654
        echo "                      </select>
                      ";
        // line 655
        if (($context["master_id"] ?? null)) {
            // line 656
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 659
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "length_class_id", [], "any", false, false, false, 659)) {
                // line 660
                echo "                                <input type=\"checkbox\" name=\"override[length_class_id]\" value=\"1\" id=\"input-variant-length-class\" data-toggle=\"switch\" data-target=\"#input-length-class\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 662
                echo "                                <input type=\"checkbox\" name=\"override[length_class_id]\" value=\"1\" id=\"input-variant-length-class\" data-toggle=\"switch\" data-target=\"#input-length-class\" class=\"custom-control-input\"/>
                              ";
            }
            // line 664
            echo "                              <label for=\"input-variant-length-class\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 669
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-weight\" class=\"col-sm-2 col-form-label\">";
        // line 673
        echo ($context["entry_weight"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"weight\" value=\"";
        // line 676
        echo ($context["weight"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_weight"] ?? null);
        echo "\" id=\"input-weight\" class=\"form-control\"/>
                      ";
        // line 677
        if (($context["master_id"] ?? null)) {
            // line 678
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 681
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "weight", [], "any", false, false, false, 681)) {
                // line 682
                echo "                                <input type=\"checkbox\" name=\"override[weight]\" value=\"1\" id=\"input-variant-weight\" data-toggle=\"switch\" data-target=\"#input-weight\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 684
                echo "                                <input type=\"checkbox\" name=\"override[weight]\" value=\"1\" id=\"input-variant-weight\" data-toggle=\"switch\" data-target=\"#input-weight\" class=\"custom-control-input\"/>
                              ";
            }
            // line 686
            echo "                              <label for=\"input-variant-weight\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 691
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">";
        // line 695
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                        ";
        // line 699
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 700
            echo "                          ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 700), ($context["weight_class_id"] ?? null)))) {
                // line 701
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 701);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 701);
                echo "</option>
                          ";
            } else {
                // line 703
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 703);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 703);
                echo "</option>
                          ";
            }
            // line 705
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 706
        echo "                      </select>
                      ";
        // line 707
        if (($context["master_id"] ?? null)) {
            // line 708
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 711
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "weight_class_id", [], "any", false, false, false, 711)) {
                // line 712
                echo "                                <input type=\"checkbox\" name=\"override[weight_class_id]\" value=\"1\" id=\"input-variant-weight-class\" data-toggle=\"switch\" data-target=\"#input-weight-class\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 714
                echo "                                <input type=\"checkbox\" name=\"override[weight_class_id]\" value=\"1\" id=\"input-variant-weight-class\" data-toggle=\"switch\" data-target=\"#input-weight-class\" class=\"custom-control-input\"/>
                              ";
            }
            // line 716
            echo "                              <label for=\"input-variant-weight-class\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 721
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-status\" class=\"col-sm-2 col-form-label\">";
        // line 725
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"status\" id=\"input-status\" class=\"form-control\">
                        ";
        // line 729
        if (($context["status"] ?? null)) {
            // line 730
            echo "                          <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                          <option value=\"0\">";
            // line 731
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                        ";
        } else {
            // line 733
            echo "                          <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                          <option value=\"0\" selected=\"selected\">";
            // line 734
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                        ";
        }
        // line 736
        echo "                      </select>
                      ";
        // line 737
        if (($context["master_id"] ?? null)) {
            // line 738
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 741
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "status", [], "any", false, false, false, 741)) {
                // line 742
                echo "                                <input type=\"checkbox\" name=\"override[status]\" value=\"1\" id=\"input-variant-status\" data-toggle=\"switch\" data-target=\"#input-status\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 744
                echo "                                <input type=\"checkbox\" name=\"override[status]\" value=\"1\" id=\"input-variant-status\" data-toggle=\"switch\" data-target=\"#input-status\" class=\"custom-control-input\"/>
                              ";
            }
            // line 746
            echo "                              <label for=\"input-variant-status\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 751
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 755
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"sort_order\" value=\"";
        // line 758
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
                      ";
        // line 759
        if (($context["master_id"] ?? null)) {
            // line 760
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 763
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "sort_order", [], "any", false, false, false, 763)) {
                // line 764
                echo "                                <input type=\"checkbox\" name=\"override[sort_order]\" value=\"1\" id=\"input-variant-sort-order\" data-toggle=\"switch\" data-target=\"#input-sort-order\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 766
                echo "                                <input type=\"checkbox\" name=\"override[sort_order]\" value=\"1\" id=\"input-variant-sort-order\" data-toggle=\"switch\" data-target=\"#input-sort-order\" class=\"custom-control-input\"/>
                              ";
            }
            // line 768
            echo "                              <label for=\"input-variant-sort-order\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 773
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-links\" class=\"tab-pane\">
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 780
        echo ($context["entry_manufacturer"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 783
        echo ($context["manufacturer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer\" class=\"form-control\"/> <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
        echo ($context["manufacturer_id"] ?? null);
        echo "\"/>
                    ";
        // line 784
        if (($context["master_id"] ?? null)) {
            // line 785
            echo "                      <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                          <div class=\"custom-control custom-switch\">
                            ";
            // line 788
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "manufacturer", [], "any", false, false, false, 788)) {
                // line 789
                echo "                              <input type=\"checkbox\" name=\"override[manufacturer]\" value=\"1\" id=\"input-variant-manufacturer\" data-toggle=\"switch\" data-target=\"#input-manufacturer\" class=\"custom-control-input\" checked/>
                            ";
            } else {
                // line 791
                echo "                              <input type=\"checkbox\" name=\"override[manufacturer]\" value=\"1\" id=\"input-variant-manufacturer\" data-toggle=\"switch\" data-target=\"#input-manufacturer\" class=\"custom-control-input\"/>
                            ";
            }
            // line 793
            echo "                            <label for=\"input-variant-manufacturer\" class=\"custom-control-label\"></label>
                          </div>
                        </div>
                      </div>
                    ";
        }
        // line 798
        echo "                  </div>
                  <small class=\"form-text text-muted\">";
        // line 799
        echo ($context["help_manufacturer"] ?? null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 803
        echo ($context["entry_category"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 805
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\"/>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-category\" class=\"table table-sm m-0\">
                        <tbody>
                          ";
        // line 810
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 811
            echo "                            <tr id=\"product-category";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 811);
            echo "\">
                              <td>";
            // line 812
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "name", [], "any", false, false, false, 812);
            echo "<input type=\"hidden\" name=\"product_category[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 812);
            echo "\"/></td>
                              <td class=\"text-right\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 816
        echo "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 819
        if (($context["master_id"] ?? null)) {
            // line 820
            echo "                      <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                          <div class=\"custom-control custom-switch\">
                            ";
            // line 823
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_category", [], "any", false, false, false, 823)) {
                // line 824
                echo "                              <input type=\"checkbox\" name=\"override[product_category]\" value=\"1\" id=\"input-variant-category\" data-toggle=\"switch\" data-target=\"#input-category, #product-category\" class=\"custom-control-input\" checked/>
                            ";
            } else {
                // line 826
                echo "                              <input type=\"checkbox\" name=\"override[product_category]\" value=\"1\" id=\"input-variant-category\" data-toggle=\"switch\" data-target=\"#input-category, #product-category\" class=\"custom-control-input\"/>
                            ";
            }
            // line 828
            echo "                            <label for=\"input-variant-category\" class=\"custom-control-label\"></label>
                          </div>
                        </div>
                      </div>
                    ";
        }
        // line 833
        echo "                  </div>
                  <small class=\"form-text text-muted\">";
        // line 834
        echo ($context["help_category"] ?? null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 838
        echo ($context["entry_filter"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 840
        echo ($context["entry_filter"] ?? null);
        echo "\" id=\"input-filter\" class=\"form-control\"/>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-filter\" class=\"table table-sm m-0\">
                        ";
        // line 844
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 845
            echo "                          <tr id=\"product-filter";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 845);
            echo "\">
                            <td>";
            // line 846
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "name", [], "any", false, false, false, 846);
            echo "<input type=\"hidden\" name=\"product_filter[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 846);
            echo "\"/></td>
                            <td class=\"text-right\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-minus-circle\"></i></button></td>
                          </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 850
        echo "                      </table>
                    </div>
                    ";
        // line 852
        if (($context["master_id"] ?? null)) {
            // line 853
            echo "                      <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                          <div class=\"custom-control custom-switch\">
                            ";
            // line 856
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_filter", [], "any", false, false, false, 856)) {
                // line 857
                echo "                              <input type=\"checkbox\" name=\"override[product_filter]\" value=\"1\" id=\"input-variant-filter\" data-toggle=\"switch\" data-target=\"#input-filter, #product-filter\" class=\"custom-control-input\" checked/>
                            ";
            } else {
                // line 859
                echo "                              <input type=\"checkbox\" name=\"override[product_filter]\" value=\"1\" id=\"input-variant-filter\" data-toggle=\"switch\" data-target=\"#input-filter, #product-filter\" class=\"custom-control-input\"/>
                            ";
            }
            // line 861
            echo "                            <label for=\"input-variant-filter\" class=\"custom-control-label\"></label>
                          </div>
                        </div>
                      </div>
                    ";
        }
        // line 866
        echo "                  </div>
                  <small class=\"form-text text-muted\">";
        // line 867
        echo ($context["help_filter"] ?? null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 871
        echo ($context["entry_store"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <div id=\"product-store\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 875
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 876
            echo "                        <label class=\"form-check\">
                          ";
            // line 877
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 877), ($context["product_store"] ?? null))) {
                // line 878
                echo "                            <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 878);
                echo "\" checked=\"checked\" class=\"form-check-input\"/>
                            ";
                // line 879
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 879);
                echo "
                          ";
            } else {
                // line 881
                echo "                            <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 881);
                echo "\" class=\"form-check-input\"/>
                            ";
                // line 882
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 882);
                echo "
                          ";
            }
            // line 884
            echo "                        </label>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 886
        echo "                    </div>
                    ";
        // line 887
        if (($context["master_id"] ?? null)) {
            // line 888
            echo "                      <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                          <div class=\"custom-control custom-switch\">
                            ";
            // line 891
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_store", [], "any", false, false, false, 891)) {
                // line 892
                echo "                              <input type=\"checkbox\" name=\"override[product_store]\" value=\"1\" id=\"input-variant-store\" data-toggle=\"switch\" data-target=\"#product-store\" class=\"custom-control-input\" checked/>
                            ";
            } else {
                // line 894
                echo "                              <input type=\"checkbox\" name=\"override[product_store]\" value=\"1\" id=\"input-variant-store\" data-toggle=\"switch\" data-target=\"#product-store\" class=\"custom-control-input\"/>
                            ";
            }
            // line 896
            echo "                            <label for=\"input-variant-store\" class=\"custom-control-label\"></label>
                          </div>
                        </div>
                      </div>
                    ";
        }
        // line 901
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 905
        echo ($context["entry_download"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 907
        echo ($context["entry_download"] ?? null);
        echo "\" id=\"input-download\" class=\"form-control\"/>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-download\" class=\"table table-sm m-0\">
                        ";
        // line 911
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 912
            echo "                          <tr id=\"product-download";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 912);
            echo "\">
                            <td>";
            // line 913
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "name", [], "any", false, false, false, 913);
            echo "<input type=\"hidden\" name=\"product_download[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 913);
            echo "\"/></td>
                            <td class=\"text-right\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-minus-circle\"></i></button></td>
                          </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 917
        echo "                      </table>
                    </div>
                    ";
        // line 919
        if (($context["master_id"] ?? null)) {
            // line 920
            echo "                      <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                          <div class=\"custom-control custom-switch\">
                            ";
            // line 923
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_download", [], "any", false, false, false, 923)) {
                // line 924
                echo "                              <input type=\"checkbox\" name=\"override[product_download]\" value=\"1\" id=\"input-variant-download\" data-toggle=\"switch\" data-target=\"#input-download, #product-download\" class=\"custom-control-input\" checked/>
                            ";
            } else {
                // line 926
                echo "                              <input type=\"checkbox\" name=\"override[product_download]\" value=\"1\" id=\"input-variant-download\" data-toggle=\"switch\" data-target=\"#input-download, #product-download\" class=\"custom-control-input\"/>
                            ";
            }
            // line 928
            echo "                            <label for=\"input-variant-download\" class=\"custom-control-label\"></label>
                          </div>
                        </div>
                      </div>
                    ";
        }
        // line 933
        echo "                  </div>
                  <small class=\"form-text text-muted\">";
        // line 934
        echo ($context["help_download"] ?? null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 938
        echo ($context["entry_related"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 940
        echo ($context["entry_related"] ?? null);
        echo "\" id=\"input-related\" class=\"form-control\"/>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-related\" class=\"table table-sm m-0\">
                        ";
        // line 944
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 945
            echo "                          <tr id=\"product-related";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 945);
            echo "\">
                            <td>";
            // line 946
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 946);
            echo "<input type=\"hidden\" name=\"product_related[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 946);
            echo "\"/></td>
                            <td class=\"text-right\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-minus-circle\"></i></button></td>
                          </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 950
        echo "                      </table>
                    </div>
                    ";
        // line 952
        if (($context["master_id"] ?? null)) {
            // line 953
            echo "                      <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                          <div class=\"custom-control custom-switch\">
                            ";
            // line 956
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_related", [], "any", false, false, false, 956)) {
                // line 957
                echo "                              <input type=\"checkbox\" name=\"override[product_related]\" value=\"1\" id=\"input-variant-related\" data-toggle=\"switch\" data-target=\"#input-related, #product-related\" class=\"custom-control-input\" checked/>
                            ";
            } else {
                // line 959
                echo "                              <input type=\"checkbox\" name=\"override[product_related]\" value=\"1\" id=\"input-variant-related\" data-toggle=\"switch\" data-target=\"#input-related, #product-related\" class=\"custom-control-input\"/>
                            ";
            }
            // line 961
            echo "                            <label for=\"input-variant-related\" class=\"custom-control-label\"></label>
                          </div>
                        </div>
                      </div>
                    ";
        }
        // line 966
        echo "                  </div>
                  <small class=\"form-text text-muted\">";
        // line 967
        echo ($context["help_related"] ?? null);
        echo "</small>
                </div>
              </div>
            </div>

            <div id=\"tab-attribute\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-attribute\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 977
        echo ($context["entry_attribute"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 978
        echo ($context["entry_text"] ?? null);
        echo "</td>
                      <td class=\"text-right\">
                        ";
        // line 980
        if (($context["master_id"] ?? null)) {
            // line 981
            echo "                          <div class=\"custom-control custom-switch\">
                            ";
            // line 982
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_attribute", [], "any", false, false, false, 982)) {
                // line 983
                echo "                              <input type=\"checkbox\" name=\"override[product_attribute]\" value=\"1\" id=\"input-variant-product-attribute\" data-toggle=\"switch\" data-target=\"#product-attribute\" class=\"custom-control-input\" checked/>
                            ";
            } else {
                // line 985
                echo "                              <input type=\"checkbox\" name=\"override[product_attribute]\" value=\"1\" id=\"input-variant-product-attribute\" data-toggle=\"switch\" data-target=\"#product-attribute\" class=\"custom-control-input\"/>
                            ";
            }
            // line 987
            echo "                            <label for=\"input-variant-product-attribute\" class=\"custom-control-label\"></label>
                          </div>
                        ";
        }
        // line 990
        echo "                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 994
        $context["attribute_row"] = 0;
        // line 995
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 996
            echo "                      <tr id=\"attribute-row";
            echo ($context["attribute_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><input type=\"text\" name=\"product_attribute[";
            // line 997
            echo ($context["attribute_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 997);
            echo "\" placeholder=\"";
            echo ($context["entry_attribute"] ?? null);
            echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"product_attribute[";
            echo ($context["attribute_row"] ?? null);
            echo "][attribute_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 997);
            echo "\"/></td>
                        <td class=\"text-left\">
                          ";
            // line 999
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1000
                echo "                            <div class=\"input-group mb-12\">
                              <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\"><img src=\"language/";
                // line 1002
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1002);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1002);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1002);
                echo "\"/></span>
                              </div>
                              <textarea name=\"product_attribute[";
                // line 1004
                echo ($context["attribute_row"] ?? null);
                echo "][product_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1004);
                echo "][text]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_text"] ?? null);
                echo "\" class=\"form-control\">";
                echo (((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 1004)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1004)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 1004)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1004)] ?? null) : null), "text", [], "any", false, false, false, 1004)) : (""));
                echo "</textarea>
                            </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1006
            echo "</td>
                        <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#attribute-row";
            // line 1007
            echo ($context["attribute_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1009
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 1010
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1011
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-right\"><button type=\"button\" id=\"button-attribute\" data-toggle=\"tooltip\" title=\"";
        // line 1015
        echo ($context["button_attribute_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

            ";
        // line 1022
        if ( !($context["master_id"] ?? null)) {
            // line 1023
            echo "              <div id=\"tab-option\" class=\"tab-pane\">
                <div id=\"option\">
                  ";
            // line 1025
            $context["option_row"] = 0;
            // line 1026
            echo "                  ";
            $context["option_value_row"] = 0;
            // line 1027
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
                // line 1028
                echo "                    <fieldset id=\"option-row";
                echo ($context["option_row"] ?? null);
                echo "\">
                      <legend>";
                // line 1029
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 1029);
                echo " <button type=\"button\" class=\"btn btn-danger btn-sm float-right\" onclick=\"\$('#option-row";
                echo ($context["option_row"] ?? null);
                echo "').remove();\"><i class=\"fas fa-minus-circle\"></i></button></legend>
                      <input type=\"hidden\" name=\"product_option[";
                // line 1030
                echo ($context["option_row"] ?? null);
                echo "][product_option_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 1030);
                echo "\"/> <input type=\"hidden\" name=\"product_option[";
                echo ($context["option_row"] ?? null);
                echo "][name]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 1030);
                echo "\"/> <input type=\"hidden\" name=\"product_option[";
                echo ($context["option_row"] ?? null);
                echo "][option_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1030);
                echo "\"/> <input type=\"hidden\" name=\"product_option[";
                echo ($context["option_row"] ?? null);
                echo "][type]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1030);
                echo "\"/>
                      <div class=\"form-group row\">
                        <label for=\"input-required";
                // line 1032
                echo ($context["option_row"] ?? null);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo ($context["entry_required"] ?? null);
                echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"product_option[";
                // line 1034
                echo ($context["option_row"] ?? null);
                echo "][required]\" id=\"input-required";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\">
                            ";
                // line 1035
                if (twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 1035)) {
                    // line 1036
                    echo "                              <option value=\"1\" selected=\"selected\">";
                    echo ($context["text_yes"] ?? null);
                    echo "</option>
                              <option value=\"0\">";
                    // line 1037
                    echo ($context["text_no"] ?? null);
                    echo "</option>
                            ";
                } else {
                    // line 1039
                    echo "                              <option value=\"1\">";
                    echo ($context["text_yes"] ?? null);
                    echo "</option>
                              <option value=\"0\" selected=\"selected\">";
                    // line 1040
                    echo ($context["text_no"] ?? null);
                    echo "</option>
                            ";
                }
                // line 1042
                echo "                          </select>
                        </div>
                      </div>
                      ";
                // line 1045
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1045), "text"))) {
                    // line 1046
                    echo "                        <div class=\"form-group row\">
                          <label for=\"input-option";
                    // line 1047
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[";
                    // line 1048
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 1048);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\"/></div>
                        </div>
                      ";
                }
                // line 1051
                echo "                      ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1051), "textarea"))) {
                    // line 1052
                    echo "                        <div class=\"form-group row\">
                          <label for=\"input-option";
                    // line 1053
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <textarea name=\"product_option[";
                    // line 1055
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" rows=\"5\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-value";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 1055);
                    echo "</textarea>
                          </div>
                        </div>
                      ";
                }
                // line 1059
                echo "                      ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1059), "file"))) {
                    // line 1060
                    echo "                        <div class=\"form-group row d-none\">
                          <label for=\"input-option";
                    // line 1061
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[";
                    // line 1062
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 1062);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\"/></div>
                        </div>
                      ";
                }
                // line 1065
                echo "                      ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1065), "date"))) {
                    // line 1066
                    echo "                        <div class=\"form-group row\">
                          <label for=\"input-option";
                    // line 1067
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10 col-md-4\">
                            <div class=\"input-group date\">
                              <input type=\"text\" name=\"product_option[";
                    // line 1070
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 1070);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\"/>
                              <div class=\"input-group-append\">
                                <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      ";
                }
                // line 1078
                echo "                      ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1078), "time"))) {
                    // line 1079
                    echo "                        <div class=\"form-group row\">
                          <label for=\"input-option";
                    // line 1080
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10 col-md-4\">
                            <div class=\"input-group time\">
                              <input type=\"text\" name=\"product_option[";
                    // line 1083
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 1083);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\"/>
                              <div class=\"input-group-append\">
                                <div class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      ";
                }
                // line 1091
                echo "                      ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1091), "datetime"))) {
                    // line 1092
                    echo "                        <div class=\"form-group row\">
                          <label for=\"input-option";
                    // line 1093
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10 col-md-4\">
                            <div class=\"input-group datetime\">
                              <input type=\"text\" name=\"product_option[";
                    // line 1096
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 1096);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\"/>
                              <div class=\"input-group-append\">
                                <div class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      ";
                }
                // line 1104
                echo "                      ";
                if (((((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1104), "select")) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1104), "radio"))) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1104), "checkbox"))) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1104), "image")))) {
                    // line 1105
                    echo "                        <div class=\"table-responsive\">
                          <table class=\"table table-bordered table-hover\">
                            <thead>
                              <tr>
                                <td class=\"text-left\">";
                    // line 1109
                    echo ($context["entry_option_value"] ?? null);
                    echo "</td>
                                <td class=\"text-right\">";
                    // line 1110
                    echo ($context["entry_quantity"] ?? null);
                    echo "</td>
                                <td class=\"text-left\">";
                    // line 1111
                    echo ($context["entry_subtract"] ?? null);
                    echo "</td>
                                <td class=\"text-right\">";
                    // line 1112
                    echo ($context["entry_price"] ?? null);
                    echo "</td>
                                <td class=\"text-right\">";
                    // line 1113
                    echo ($context["entry_points"] ?? null);
                    echo "</td>
                                <td class=\"text-right\">";
                    // line 1114
                    echo ($context["entry_weight"] ?? null);
                    echo "</td>
                                <td></td>
                              </tr>
                            </thead>
                            <tbody id=\"option-value";
                    // line 1118
                    echo ($context["option_row"] ?? null);
                    echo "\">
                              ";
                    // line 1119
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 1119));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                        // line 1120
                        echo "                                <tr id=\"option-value-row";
                        echo ($context["option_value_row"] ?? null);
                        echo "\">
                                  <td class=\"text-left\">";
                        // line 1121
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "name", [], "any", false, false, false, 1121);
                        echo "
                                    <input type=\"hidden\" name=\"product_option[";
                        // line 1122
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][option_value_id]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 1122);
                        echo "\"/> <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][product_option_value_id]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 1122);
                        echo "\"/></td>
                                  <td class=\"text-right\">";
                        // line 1123
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 1123);
                        echo " <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][quantity]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 1123);
                        echo "\"/></td>
                                  <td class=\"text-left\">";
                        // line 1124
                        if (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 1124)) {
                            // line 1125
                            echo "                                      ";
                            echo ($context["text_yes"] ?? null);
                            echo "
                                    ";
                        } else {
                            // line 1127
                            echo "                                      ";
                            echo ($context["text_no"] ?? null);
                            echo "
                                    ";
                        }
                        // line 1129
                        echo "                                    <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][subtract]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 1129);
                        echo "\"/></td>
                                  <td class=\"text-right\">";
                        // line 1130
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 1130);
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 1130);
                        echo "
                                    <input type=\"hidden\" name=\"product_option[";
                        // line 1131
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][price_prefix]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 1131);
                        echo "\"/> <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][price]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 1131);
                        echo "\"/></td>
                                  <td class=\"text-right\">";
                        // line 1132
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 1132);
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 1132);
                        echo "
                                    <input type=\"hidden\" name=\"product_option[";
                        // line 1133
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][points_prefix]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 1133);
                        echo "\"/> <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][points]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 1133);
                        echo "\"/></td>
                                  <td class=\"text-right\">";
                        // line 1134
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 1134);
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 1134);
                        echo "
                                    <input type=\"hidden\" name=\"product_option[";
                        // line 1135
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][weight_prefix]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 1135);
                        echo "\"/> <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][weight]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 1135);
                        echo "\"/></td>
                                  <td class=\"text-right\"><button type=\"button\" data-toggle=\"tooltip\" title=\"";
                        // line 1136
                        echo ($context["button_edit"] ?? null);
                        echo "\" data-option-row=\"";
                        echo ($context["option_row"] ?? null);
                        echo "\" data-option-value-row=\"";
                        echo ($context["option_value_row"] ?? null);
                        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-pencil-alt\"></i></button> <button type=\"button\" onclick=\"\$(this).tooltip('dispose'); \$('#option-value-row";
                        echo ($context["option_value_row"] ?? null);
                        echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["button_remove"] ?? null);
                        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                                </tr>
                                ";
                        // line 1138
                        $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                        // line 1139
                        echo "                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1140
                    echo "                            </tbody>
                            <tfoot>
                              <tr>
                                <td colspan=\"6\"></td>
                                <td class=\"text-right\"><button type=\"button\" data-toggle=\"tooltip\" title=\"";
                    // line 1144
                    echo ($context["button_option_value_add"] ?? null);
                    echo "\" data-option-row=\"";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                              </tr>
                            </tfoot>
                          </table>
                          <select id=\"product-option-values";
                    // line 1148
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"d-none\">
                            ";
                    // line 1149
                    if ((($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["option_values"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1149)] ?? null) : null)) {
                        // line 1150
                        echo "                              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["option_values"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1150)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 1151
                            echo "                                <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 1151);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1151);
                            echo "</option>
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1153
                        echo "                            ";
                    }
                    // line 1154
                    echo "                          </select>
                        </div>
                      ";
                }
                // line 1157
                echo "                    </fieldset>
                    ";
                // line 1158
                $context["option_row"] = (($context["option_row"] ?? null) + 1);
                // line 1159
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1160
            echo "                </div>
                <fieldset>
                  <legend>";
            // line 1162
            echo ($context["text_option_add"] ?? null);
            echo "</legend>
                  <div class=\"form-group row\">
                    <label for=\"input-option\" class=\"col-sm-2 col-form-label\">";
            // line 1164
            echo ($context["entry_option"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
            // line 1166
            echo ($context["entry_option"] ?? null);
            echo "\" id=\"input-option\" class=\"form-control\"/>
                      <small class=\"form-text text-muted\">";
            // line 1167
            echo ($context["help_option"] ?? null);
            echo "</small>
                    </div>
                  </div>
                </fieldset>
              </div>
            ";
        } else {
            // line 1173
            echo "              <div id=\"tab-option\" class=\"tab-pane\">
                ";
            // line 1174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 1175
                echo "                  <fieldset>
                    <legend>";
                // line 1176
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1176);
                echo "</legend>
                    ";
                // line 1177
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1177), "select"))) {
                    // line 1178
                    echo "                      <div class=\"form-group row";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1178)) {
                        echo " required";
                    }
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 1179
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1179);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <select name=\"variant[";
                    // line 1182
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1182);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1182);
                    echo "\" class=\"form-control\">
                              <option value=\"\">";
                    // line 1183
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                              ";
                    // line 1184
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 1184));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 1185
                        echo "                                ";
                        if (((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["variant"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1185)] ?? null) : null) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1185), (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["variant"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1185)] ?? null) : null))))) {
                            // line 1186
                            echo "                                  <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1186);
                            echo "\" selected>";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1186);
                            echo "
                                    ";
                            // line 1187
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1187)) {
                                // line 1188
                                echo "                                      (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 1188);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1188);
                                echo ")
                                    ";
                            }
                            // line 1189
                            echo "</option>
                                ";
                        } else {
                            // line 1191
                            echo "                                  <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1191);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1191);
                            echo "
                                    ";
                            // line 1192
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1192)) {
                                // line 1193
                                echo "                                      (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 1193);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1193);
                                echo ")
                                    ";
                            }
                            // line 1194
                            echo "</option>
                                ";
                        }
                        // line 1196
                        echo "                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1197
                    echo "                            </select>
                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\">
                                <div class=\"custom-control custom-switch\">
                                  ";
                    // line 1201
                    if ((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1201)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1201)] ?? null) : null)) {
                        // line 1202
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1202);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1202);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1202);
                        echo "\" class=\"custom-control-input\" checked/>
                                  ";
                    } else {
                        // line 1204
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1204);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1204);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1204);
                        echo "\" class=\"custom-control-input\"/>
                                  ";
                    }
                    // line 1206
                    echo "                                  <label for=\"input-variant-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1206);
                    echo "\" class=\"custom-control-label\"></label>
                                </div>
                              </div>
                            </div>
                          </div>
                          ";
                    // line 1211
                    if ((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["error_variant"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1211)] ?? null) : null)) {
                        // line 1212
                        echo "                            <div class=\"invalid-tooltip\">";
                        echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["error_variant"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1212)] ?? null) : null);
                        echo "</div>
                          ";
                    }
                    // line 1214
                    echo "                        </div>
                      </div>
                    ";
                }
                // line 1217
                echo "
                    ";
                // line 1218
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1218), "radio"))) {
                    // line 1219
                    echo "                      <div class=\"form-group row";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1219)) {
                        echo " required";
                    }
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 1220
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1220);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option";
                    // line 1223
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1223);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              ";
                    // line 1224
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 1224));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 1225
                        echo "                                <div class=\"form-check\">
                                  <label>
                                    ";
                        // line 1227
                        if (((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["variant"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1227)] ?? null) : null) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1227), (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["variant"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1227)] ?? null) : null))))) {
                            // line 1228
                            echo "                                      <input type=\"radio\" name=\"variant[";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1228);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1228);
                            echo "\" class=\"form-check-input\" checked/>
                                    ";
                        } else {
                            // line 1230
                            echo "                                      <input type=\"radio\" name=\"variant[";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1230);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1230);
                            echo "\" class=\"form-check-input\"/>
                                    ";
                        }
                        // line 1232
                        echo "                                    ";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 1232)) {
                            echo "<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 1232);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1232);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1232)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 1232);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1232);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 1233
                        echo "                                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1233);
                        echo "
                                    ";
                        // line 1234
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1234)) {
                            // line 1235
                            echo "                                      (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 1235);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1235);
                            echo ")
                                    ";
                        }
                        // line 1237
                        echo "                                  </label>
                                </div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1240
                    echo "                            </div>
                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\">
                                <div class=\"custom-control custom-switch\">
                                  ";
                    // line 1244
                    if ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1244)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1244)] ?? null) : null)) {
                        // line 1245
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1245);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1245);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1245);
                        echo "\" class=\"custom-control-input\" checked/>
                                  ";
                    } else {
                        // line 1247
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1247);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1247);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1247);
                        echo "\" class=\"custom-control-input\"/>
                                  ";
                    }
                    // line 1249
                    echo "                                  <label for=\"input-variant-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1249);
                    echo "\" class=\"custom-control-label\"></label>
                                </div>
                              </div>
                            </div>
                          </div>
                          ";
                    // line 1254
                    if ((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["error_variant"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1254)] ?? null) : null)) {
                        // line 1255
                        echo "                            <div class=\"invalid-tooltip\">";
                        echo (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["error_variant"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1255)] ?? null) : null);
                        echo "</div>
                          ";
                    }
                    // line 1257
                    echo "                        </div>
                      </div>
                    ";
                }
                // line 1260
                echo "
                    ";
                // line 1261
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1261), "checkbox"))) {
                    // line 1262
                    echo "                      <div class=\"form-group row";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1262)) {
                        echo " required";
                    }
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 1263
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1263);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option";
                    // line 1266
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1266);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              ";
                    // line 1267
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 1267));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 1268
                        echo "                                <div class=\"form-check\">
                                  <label>
                                    ";
                        // line 1270
                        if (((($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["variant"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1270)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1270), (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = ($context["variant"] ?? null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1270)] ?? null) : null)))) {
                            // line 1271
                            echo "                                      <input type=\"checkbox\" name=\"variant[";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1271);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1271);
                            echo "\" class=\"form-check-input\" checked/>
                                    ";
                        } else {
                            // line 1273
                            echo "                                      <input type=\"checkbox\" name=\"variant[";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1273);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1273);
                            echo "\" class=\"form-check-input\"/>
                                    ";
                        }
                        // line 1275
                        echo "                                    ";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 1275)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 1275);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1275);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1275)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 1275);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1275);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 1276
                        echo "                                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1276);
                        echo "
                                    ";
                        // line 1277
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1277)) {
                            // line 1278
                            echo "                                      (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 1278);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1278);
                            echo ")
                                    ";
                        }
                        // line 1280
                        echo "                                  </label>
                                </div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1283
                    echo "                            </div>
                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\">
                                <div class=\"custom-control custom-switch\">
                                  ";
                    // line 1287
                    if ((($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1287)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1287)] ?? null) : null)) {
                        // line 1288
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1288);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1288);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1288);
                        echo "\" class=\"custom-control-input\" checked/>
                                  ";
                    } else {
                        // line 1290
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1290);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1290);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1290);
                        echo "\" class=\"custom-control-input\"/>
                                  ";
                    }
                    // line 1292
                    echo "                                  <label for=\"input-variant-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1292);
                    echo "\" class=\"custom-control-label\"></label>
                                </div>
                              </div>
                            </div>
                          </div>
                          ";
                    // line 1297
                    if ((($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["error_variant"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1297)] ?? null) : null)) {
                        // line 1298
                        echo "                            <div class=\"invalid-tooltip\">";
                        echo (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = ($context["error_variant"] ?? null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1298)] ?? null) : null);
                        echo "</div>
                          ";
                    }
                    // line 1300
                    echo "                        </div>
                      </div>
                    ";
                }
                // line 1303
                echo "
                    ";
                // line 1304
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1304), "text"))) {
                    // line 1305
                    echo "                      <div class=\"form-group row";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1305)) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option";
                    // line 1306
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1306);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1306);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"variant[";
                    // line 1309
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1309);
                    echo "]\" value=\"";
                    echo (((($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = ($context["variant"] ?? null)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1309)] ?? null) : null)) ? ((($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = ($context["variant"] ?? null)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1309)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1309)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1309);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1309);
                    echo "\" class=\"form-control\"/>
                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\">
                                <div class=\"custom-control custom-switch\">
                                  ";
                    // line 1313
                    if ((($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1313)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1313)] ?? null) : null)) {
                        // line 1314
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1314);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1314);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1314);
                        echo "\" class=\"custom-control-input\" checked/>
                                  ";
                    } else {
                        // line 1316
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1316);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1316);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1316);
                        echo "\" class=\"custom-control-input\"/>
                                  ";
                    }
                    // line 1318
                    echo "                                  <label for=\"input-variant-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1318);
                    echo "\" class=\"custom-control-label\"></label>
                                </div>
                              </div>
                            </div>
                          </div>
                          ";
                    // line 1323
                    if ((($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = ($context["error_variant"] ?? null)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1323)] ?? null) : null)) {
                        // line 1324
                        echo "                            <div class=\"invalid-tooltip\">";
                        echo (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = ($context["error_variant"] ?? null)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1324)] ?? null) : null);
                        echo "</div>
                          ";
                    }
                    // line 1326
                    echo "                        </div>
                      </div>
                    ";
                }
                // line 1329
                echo "
                    ";
                // line 1330
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1330), "textarea"))) {
                    // line 1331
                    echo "                      <div class=\"form-group row";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1331)) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option";
                    // line 1332
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1332);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1332);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <textarea name=\"variant[";
                    // line 1335
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1335);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1335);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1335);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = ($context["variant"] ?? null)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1335)] ?? null) : null)) ? ((($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = ($context["variant"] ?? null)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1335)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1335)));
                    echo "</textarea>
                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\">
                                <div class=\"custom-control custom-switch\">
                                  ";
                    // line 1339
                    if ((($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1339)) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1339)] ?? null) : null)) {
                        // line 1340
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1340);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1340);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1340);
                        echo "\" class=\"custom-control-input\" checked/>
                                  ";
                    } else {
                        // line 1342
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1342);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1342);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1342);
                        echo "\" class=\"custom-control-input\"/>
                                  ";
                    }
                    // line 1344
                    echo "                                  <label for=\"input-variant-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1344);
                    echo "\" class=\"custom-control-label\"></label>
                                </div>
                              </div>
                            </div>
                          </div>
                          ";
                    // line 1349
                    if ((($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = ($context["error_variant"] ?? null)) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1349)] ?? null) : null)) {
                        // line 1350
                        echo "                            <div class=\"invalid-tooltip\">";
                        echo (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = ($context["error_variant"] ?? null)) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1350)] ?? null) : null);
                        echo "</div>
                          ";
                    }
                    // line 1352
                    echo "                        </div>
                      </div>
                    ";
                }
                // line 1355
                echo "
                    ";
                // line 1356
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1356), "file"))) {
                    // line 1357
                    echo "                      <div class=\"form-group row";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1357)) {
                        echo " required";
                    }
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 1358
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1358);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <button type=\"button\" id=\"button-upload";
                    // line 1361
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1361);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-light\"><i class=\"fas fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                            <input type=\"hidden\" name=\"variant[";
                    // line 1362
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1362);
                    echo "]\" value=\"";
                    echo (((($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = ($context["variant"] ?? null)) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1362)] ?? null) : null)) ? ((($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = ($context["variant"] ?? null)) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1362)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1362)));
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1362);
                    echo "\"/>
                            <div class=\"input-group-append align-items-center\">
                              <div class=\"custom-control custom-switch\">
                                ";
                    // line 1365
                    if ((($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1365)) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1365)] ?? null) : null)) {
                        // line 1366
                        echo "                                  <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1366);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1366);
                        echo "\" data-toggle=\"switch\" data-target=\"#button-upload";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1366);
                        echo "\" class=\"custom-control-input\" checked/>
                                ";
                    } else {
                        // line 1368
                        echo "                                  <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1368);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1368);
                        echo "\" data-toggle=\"switch\" data-target=\"#button-upload";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1368);
                        echo "\" class=\"custom-control-input\"/>
                                ";
                    }
                    // line 1370
                    echo "                                <label for=\"input-variant-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1370);
                    echo "\" class=\"custom-control-label\"></label>
                              </div>
                            </div>
                          </div>
                          ";
                    // line 1374
                    if ((($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = ($context["error_variant"] ?? null)) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1374)] ?? null) : null)) {
                        // line 1375
                        echo "                            <div class=\"invalid-tooltip\">";
                        echo (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = ($context["error_variant"] ?? null)) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1375)] ?? null) : null);
                        echo "</div>
                          ";
                    }
                    // line 1377
                    echo "                        </div>
                      </div>
                    ";
                }
                // line 1380
                echo "
                    ";
                // line 1381
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1381), "date"))) {
                    // line 1382
                    echo "                      <div class=\"form-group row";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1382)) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option";
                    // line 1383
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1383);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1383);
                    echo "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"variant[";
                    // line 1386
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1386);
                    echo "]\" value=\"";
                    echo (((($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = ($context["variant"] ?? null)) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1386)] ?? null) : null)) ? ((($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = ($context["variant"] ?? null)) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1386)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1386)));
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1386);
                    echo "\" class=\"form-control\"/>
                            <div class=\"input-group-append\">
                              <span class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></span>
                            </div>
                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\">
                                <div class=\"custom-control custom-switch\">
                                  ";
                    // line 1393
                    if ((($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1393)) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1393)] ?? null) : null)) {
                        // line 1394
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1394);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1394);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1394);
                        echo "\" class=\"custom-control-input\" checked/>
                                  ";
                    } else {
                        // line 1396
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1396);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1396);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1396);
                        echo "\" class=\"custom-control-input\"/>
                                  ";
                    }
                    // line 1398
                    echo "                                  <label for=\"input-variant-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1398);
                    echo "\" class=\"custom-control-label\"></label>
                                </div>
                              </div>
                            </div>
                          </div>
                          ";
                    // line 1403
                    if ((($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = ($context["error_variant"] ?? null)) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1403)] ?? null) : null)) {
                        // line 1404
                        echo "                            <div class=\"invalid-tooltip\">";
                        echo (($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = ($context["error_variant"] ?? null)) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1404)] ?? null) : null);
                        echo "</div>
                          ";
                    }
                    // line 1406
                    echo "                        </div>
                      </div>
                    ";
                }
                // line 1409
                echo "
                    ";
                // line 1410
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1410), "time"))) {
                    // line 1411
                    echo "                      <div class=\"form-group row";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1411)) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option";
                    // line 1412
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1412);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1412);
                    echo "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group time\">
                            <input type=\"text\" name=\"variant[";
                    // line 1415
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1415);
                    echo "]\" value=\"";
                    echo (((($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = ($context["variant"] ?? null)) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1415)] ?? null) : null)) ? ((($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = ($context["variant"] ?? null)) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1415)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1415)));
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1415);
                    echo "\" class=\"form-control\"/>
                            <div class=\"input-group-append\">
                              <span class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></span>
                            </div>
                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\">
                                <div class=\"custom-control custom-switch\">
                                  ";
                    // line 1422
                    if ((($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1422)) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1422)] ?? null) : null)) {
                        // line 1423
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1423);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1423);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1423);
                        echo "\" class=\"custom-control-input\" checked/>
                                  ";
                    } else {
                        // line 1425
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1425);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1425);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1425);
                        echo "\" class=\"custom-control-input\"/>
                                  ";
                    }
                    // line 1427
                    echo "                                  <label for=\"input-variant-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1427);
                    echo "\" class=\"custom-control-label\"></label>
                                </div>
                              </div>
                            </div>
                          </div>
                          ";
                    // line 1432
                    if ((($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = ($context["error_variant"] ?? null)) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1432)] ?? null) : null)) {
                        // line 1433
                        echo "                            <div class=\"invalid-tooltip\">";
                        echo (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = ($context["error_variant"] ?? null)) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1433)] ?? null) : null);
                        echo "</div>
                          ";
                    }
                    // line 1435
                    echo "                        </div>
                      </div>
                    ";
                }
                // line 1438
                echo "
                    ";
                // line 1439
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1439), "datetime"))) {
                    // line 1440
                    echo "                      <div class=\"form-group row";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1440)) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option";
                    // line 1441
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1441);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1441);
                    echo "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group datetime\">
                            <input type=\"text\" name=\"variant[";
                    // line 1444
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1444);
                    echo "]\" value=\"";
                    echo (((($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = ($context["variant"] ?? null)) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1444)] ?? null) : null)) ? ((($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = ($context["variant"] ?? null)) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1444)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1444)));
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1444);
                    echo "\" class=\"form-control\"/>
                            <div class=\"input-group-append\">
                              <span class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></span>
                            </div>
                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\">
                                <div class=\"custom-control custom-switch\">
                                  ";
                    // line 1451
                    if ((($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1451)) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1451)] ?? null) : null)) {
                        // line 1452
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1452);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1452);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1452);
                        echo "\" class=\"custom-control-input\" checked/>
                                  ";
                    } else {
                        // line 1454
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1454);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1454);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1454);
                        echo "\" class=\"custom-control-input\"/>
                                  ";
                    }
                    // line 1456
                    echo "                                  <label for=\"input-variant-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1456);
                    echo "\" class=\"custom-control-label\"></label>
                                </div>
                              </div>
                            </div>
                          </div>
                          ";
                    // line 1461
                    if ((($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = ($context["error_variant"] ?? null)) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1461)] ?? null) : null)) {
                        // line 1462
                        echo "                            <div class=\"invalid-tooltip\">";
                        echo (($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = ($context["error_variant"] ?? null)) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1462)] ?? null) : null);
                        echo "</div>
                          ";
                    }
                    // line 1464
                    echo "                        </div>
                      </div>
                    ";
                }
                // line 1467
                echo "
                  </fieldset>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1470
            echo "              </div>
            ";
        }
        // line 1472
        echo "
            <div id=\"tab-recurring\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-recurring\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1478
        echo ($context["entry_recurring"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1479
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">
                        ";
        // line 1481
        if (($context["master_id"] ?? null)) {
            // line 1482
            echo "                          <div class=\"custom-control custom-switch\">
                            ";
            // line 1483
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_recurring", [], "any", false, false, false, 1483)) {
                // line 1484
                echo "                              <input type=\"checkbox\" name=\"override[product_recurring]\" value=\"1\" id=\"input-variant-product-recurring\" data-toggle=\"switch\" data-target=\"#product-recurring\" class=\"custom-control-input\" checked/>
                            ";
            } else {
                // line 1486
                echo "                              <input type=\"checkbox\" name=\"override[product_recurring]\" value=\"1\" id=\"input-variant-product-recurring\" data-toggle=\"switch\" data-target=\"#product-recurring\" class=\"custom-control-input\"/>
                            ";
            }
            // line 1488
            echo "                            <label for=\"input-variant-product-recurring\" class=\"custom-control-label\"></label>
                          </div>
                        ";
        }
        // line 1491
        echo "                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1495
        $context["recurring_row"] = 0;
        // line 1496
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_recurring"]) {
            // line 1497
            echo "                      <tr id=\"recurring-row";
            echo ($context["recurring_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_recurring[";
            // line 1498
            echo ($context["recurring_row"] ?? null);
            echo "][recurring_id]\" class=\"form-control\">
                            ";
            // line 1499
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 1500
                echo "                              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1500), twig_get_attribute($this->env, $this->source, $context["product_recurring"], "recurring_id", [], "any", false, false, false, 1500)))) {
                    // line 1501
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1501);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 1501);
                    echo "</option>
                              ";
                } else {
                    // line 1503
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1503);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 1503);
                    echo "</option>
                              ";
                }
                // line 1505
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1506
            echo "                          </select></td>
                        <td class=\"text-left\"><select name=\"product_recurring[";
            // line 1507
            echo ($context["recurring_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">
                            ";
            // line 1508
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1509
                echo "                              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1509), twig_get_attribute($this->env, $this->source, $context["product_recurring"], "customer_group_id", [], "any", false, false, false, 1509)))) {
                    // line 1510
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1510);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1510);
                    echo "</option>
                              ";
                } else {
                    // line 1512
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1512);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1512);
                    echo "</option>
                              ";
                }
                // line 1514
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1515
            echo "                          </select></td>
                        <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#recurring-row";
            // line 1516
            echo ($context["recurring_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1518
            $context["recurring_row"] = (($context["recurring_row"] ?? null) + 1);
            // line 1519
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1520
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-right\"><button type=\"button\" id=\"button-recurring\" data-toggle=\"tooltip\" title=\"";
        // line 1524
        echo ($context["button_recurring_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

            <div id=\"tab-discount\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-discount\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1536
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1537
        echo ($context["entry_quantity"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1538
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1539
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1540
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1541
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1542
        if (($context["master_id"] ?? null)) {
            // line 1543
            echo "                          <div class=\"custom-control custom-switch\">
                            ";
            // line 1544
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_discount", [], "any", false, false, false, 1544)) {
                // line 1545
                echo "                              <input type=\"checkbox\" name=\"override[product_discount]\" value=\"1\" id=\"input-variant-product-discount\" data-toggle=\"switch\" data-target=\"#product-discount\" class=\"custom-control-input\" checked/>
                            ";
            } else {
                // line 1547
                echo "                              <input type=\"checkbox\" name=\"override[product_discount]\" value=\"1\" id=\"input-variant-product-discount\" data-toggle=\"switch\" data-target=\"#product-discount\" class=\"custom-control-input\"/>
                            ";
            }
            // line 1549
            echo "                            <label for=\"input-variant-product-discount\" class=\"custom-control-label\"></label>
                          </div>
                        ";
        }
        // line 1551
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1555
        $context["discount_row"] = 0;
        // line 1556
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 1557
            echo "                      <tr id=\"discount-row";
            echo ($context["discount_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_discount[";
            // line 1558
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">
                            ";
            // line 1559
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1560
                echo "                              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1560), twig_get_attribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 1560)))) {
                    // line 1561
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1561);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1561);
                    echo "</option>
                              ";
                } else {
                    // line 1563
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1563);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1563);
                    echo "</option>
                              ";
                }
                // line 1565
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1566
            echo "                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 1567
            echo ($context["discount_row"] ?? null);
            echo "][quantity]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 1567);
            echo "\" placeholder=\"";
            echo ($context["entry_quantity"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 1568
            echo ($context["discount_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 1568);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 1569
            echo ($context["discount_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 1569);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
            // line 1572
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 1572);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" class=\"form-control\"/>
                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                            </div>
                          </div>
                        </td>
                        <td class=\"text-left\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
            // line 1580
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 1580);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" class=\"form-control\"/>
                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                            </div>
                          </div>
                        </td>
                        <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#discount-row";
            // line 1586
            echo ($context["discount_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1588
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 1589
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1590
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"6\"></td>
                      <td class=\"text-right\"><button type=\"button\" id=\"button-discount\" data-toggle=\"tooltip\" title=\"";
        // line 1594
        echo ($context["button_discount_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

            <div id=\"tab-special\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-special\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1606
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1607
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1608
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1609
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1610
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1611
        if (($context["master_id"] ?? null)) {
            // line 1612
            echo "                          <div class=\"custom-control custom-switch\">
                            ";
            // line 1613
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_special", [], "any", false, false, false, 1613)) {
                // line 1614
                echo "                              <input type=\"checkbox\" name=\"override[product_special]\" value=\"1\" id=\"input-variant-special\" data-toggle=\"switch\" data-target=\"#product-special\" class=\"custom-control-input\" checked/>
                            ";
            } else {
                // line 1616
                echo "                              <input type=\"checkbox\" name=\"override[product_special]\" value=\"1\" id=\"input-variant-special\" data-toggle=\"switch\" data-target=\"#product-special\" class=\"custom-control-input\"/>
                            ";
            }
            // line 1618
            echo "                            <label for=\"input-variant-special\" class=\"custom-control-label\"></label>
                          </div>
                        ";
        }
        // line 1620
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1624
        $context["special_row"] = 0;
        // line 1625
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 1626
            echo "                      <tr id=\"special-row";
            echo ($context["special_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_special[";
            // line 1627
            echo ($context["special_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">
                            ";
            // line 1628
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1629
                echo "                              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1629), twig_get_attribute($this->env, $this->source, $context["product_special"], "customer_group_id", [], "any", false, false, false, 1629)))) {
                    // line 1630
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1630);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1630);
                    echo "</option>
                              ";
                } else {
                    // line 1632
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1632);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1632);
                    echo "</option>
                              ";
                }
                // line 1634
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1635
            echo "                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 1636
            echo ($context["special_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 1636);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 1637
            echo ($context["special_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 1637);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
            // line 1640
            echo ($context["special_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 1640);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" class=\"form-control\"/>
                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                            </div>
                          </div>
                        </td>
                        <td class=\"text-left\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
            // line 1648
            echo ($context["special_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 1648);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" class=\"form-control\"/>
                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                            </div>
                          </div>
                        </td>
                        <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#special-row";
            // line 1654
            echo ($context["special_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1656
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 1657
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1658
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"5\"></td>
                      <td class=\"text-right\"><button type=\"button\" id=\"button-special\" data-toggle=\"tooltip\" title=\"";
        // line 1662
        echo ($context["button_special_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

            <div id=\"tab-image\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1671
        echo ($context["text_image"] ?? null);
        echo "</legend>
                <div class=\"row\">
                  <div class=\"col-sm-4 col-md-3 mb-3\">
                    <div id=\"image\" class=\"card image\">
                      <img src=\"";
        // line 1675
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"image\" value=\"";
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\"/>
                      <div class=\"card-body\">
                        <button type=\"button\" data-toggle=\"image\" data-target=\"#input-image\" data-thumb=\"#thumb-image\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 1677
        echo ($context["button_edit"] ?? null);
        echo "</button>
                        <button type=\"button\" data-toggle=\"clear\" data-target=\"#input-image\" data-thumb=\"#thumb-image\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i> ";
        // line 1678
        echo ($context["button_clear"] ?? null);
        echo "</button>
                        ";
        // line 1679
        if (($context["master_id"] ?? null)) {
            // line 1680
            echo "                          <div class=\"mx-auto w-25\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 1682
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_image", [], "any", false, false, false, 1682)) {
                // line 1683
                echo "                                <input type=\"checkbox\" name=\"override[product_image]\" value=\"1\" id=\"input-variant-image\" data-toggle=\"switch\" data-target=\"#image\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 1685
                echo "                                <input type=\"checkbox\" name=\"override[product_image]\" value=\"1\" id=\"input-variant-image\" data-toggle=\"switch\" data-target=\"#image\" class=\"custom-control-input\"/>
                              ";
            }
            // line 1687
            echo "                              <label for=\"input-variant-image\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        ";
        }
        // line 1691
        echo "                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1697
        echo ($context["text_image_additional"] ?? null);
        echo "</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-image\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-left\">";
        // line 1702
        echo ($context["entry_image"] ?? null);
        echo "</td>
                        <td class=\"text-left\">";
        // line 1703
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                        <td class=\"text-right\">";
        // line 1704
        if (($context["master_id"] ?? null)) {
            // line 1705
            echo "                            <div class=\"custom-control custom-switch\">
                              ";
            // line 1706
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_image", [], "any", false, false, false, 1706)) {
                // line 1707
                echo "                                <input type=\"checkbox\" name=\"override[product_image]\" value=\"1\" id=\"input-variant-product-image\" data-toggle=\"switch\" data-target=\"#product-image\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 1709
                echo "                                <input type=\"checkbox\" name=\"override[product_image]\" value=\"1\" id=\"input-variant-product-image\" data-toggle=\"switch\" data-target=\"#product-image\" class=\"custom-control-input\"/>
                              ";
            }
            // line 1711
            echo "                              <label for=\"input-variant-product-image\" class=\"custom-control-label\"></label>
                            </div>
                          ";
        }
        // line 1713
        echo "</td>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 1717
        $context["image_row"] = 0;
        // line 1718
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1719
            echo "                        <tr id=\"image-row";
            echo ($context["image_row"] ?? null);
            echo "\">
                          <td>
                            <div class=\"card image\">
                              <img src=\"";
            // line 1722
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 1722);
            echo "\" alt=\"\" title=\"\" id=\"thumb-image";
            echo ($context["image_row"] ?? null);
            echo "\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"product_image[";
            echo ($context["image_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 1722);
            echo "\" id=\"input-image";
            echo ($context["image_row"] ?? null);
            echo "\"/>
                              <div class=\"card-body\">
                                <button type=\"button\" data-toggle=\"image\" data-target=\"#input-image";
            // line 1724
            echo ($context["image_row"] ?? null);
            echo "\" data-thumb=\"#thumb-image";
            echo ($context["image_row"] ?? null);
            echo "\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i> ";
            echo ($context["button_edit"] ?? null);
            echo "</button>
                                <button type=\"button\" data-toggle=\"clear\" data-target=\"#input-image";
            // line 1725
            echo ($context["image_row"] ?? null);
            echo "\" data-thumb=\"#thumb-image";
            echo ($context["image_row"] ?? null);
            echo "\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i> ";
            echo ($context["button_clear"] ?? null);
            echo "</button>
                              </div>
                            </div>
                          </td>
                          <td class=\"text-left\"><input type=\"text\" name=\"product_image[";
            // line 1729
            echo ($context["image_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 1729);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\" class=\"form-control\"/></td>
                          <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#image-row";
            // line 1730
            echo ($context["image_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>
                        </tr>
                        ";
            // line 1732
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 1733
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1734
        echo "                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan=\"2\"></td>
                        <td class=\"text-right\"><button type=\"button\" id=\"button-image\" data-toggle=\"tooltip\" title=\"";
        // line 1738
        echo ($context["button_image_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus-circle\"></i></button></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </fieldset>
            </div>

            <div id=\"tab-reward\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1748
        echo ($context["text_reward"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label for=\"input-points\" class=\"col-sm-2 col-form-label\">";
        // line 1750
        echo ($context["entry_points"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"points\" value=\"";
        // line 1753
        echo ($context["points"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_points"] ?? null);
        echo "\" id=\"input-points\" class=\"form-control\"/>
                      ";
        // line 1754
        if (($context["master_id"] ?? null)) {
            // line 1755
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 1758
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "points", [], "any", false, false, false, 1758)) {
                // line 1759
                echo "                                <input type=\"checkbox\" name=\"override[points]\" value=\"1\" id=\"input-variant-points\" data-toggle=\"switch\" data-target=\"#input-points\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 1761
                echo "                                <input type=\"checkbox\" name=\"override[points]\" value=\"1\" id=\"input-variant-points\" data-toggle=\"switch\" data-target=\"#input-points\" class=\"custom-control-input\"/>
                              ";
            }
            // line 1763
            echo "                              <label for=\"input-variant-points\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 1768
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 1769
        echo ($context["help_points"] ?? null);
        echo "</small>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1774
        echo ($context["text_points"] ?? null);
        echo "</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-reward\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-left\">";
        // line 1779
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                        <td class=\"text-right\">";
        // line 1780
        echo ($context["entry_reward"] ?? null);
        echo "
                          ";
        // line 1781
        if (($context["master_id"] ?? null)) {
            // line 1782
            echo "                            <div class=\"custom-control custom-switch float-right\">
                              ";
            // line 1783
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_reward", [], "any", false, false, false, 1783)) {
                // line 1784
                echo "                                <input type=\"checkbox\" name=\"override[product_reward]\" value=\"1\" id=\"input-variant-product-reward\" data-toggle=\"switch\" data-target=\"#product-reward\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 1786
                echo "                                <input type=\"checkbox\" name=\"override[product_reward]\" value=\"1\" id=\"input-variant-product-reward\" data-toggle=\"switch\" data-target=\"#product-reward\" class=\"custom-control-input\"/>
                              ";
            }
            // line 1788
            echo "                              <label for=\"input-variant-product-reward\" class=\"custom-control-label\"></label>
                            </div>
                          ";
        }
        // line 1791
        echo "                        </td>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 1795
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1796
            echo "                        <tr>
                          <td class=\"text-left\">";
            // line 1797
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1797);
            echo "</td>
                          <td class=\"text-right\"><input type=\"text\" name=\"product_reward[";
            // line 1798
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1798);
            echo "][points]\" value=\"";
            echo (((($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = ($context["product_reward"] ?? null)) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1798)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = ($context["product_reward"] ?? null)) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1798)] ?? null) : null), "points", [], "any", false, false, false, 1798)) : (""));
            echo "\" class=\"form-control\"/></td>
                        </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1801
        echo "                    </tbody>
                  </table>
                </div>
              </fieldset>
            </div>

            <div id=\"tab-seo\" class=\"tab-pane\">
              <div class=\"alert alert-info\"><i class=\"fas fa-info-circle\"></i> ";
        // line 1808
        echo ($context["text_keyword"] ?? null);
        echo "</div>
              <div id=\"product-seo\" class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1813
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1814
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1818
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1819
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 1820
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1820);
            echo "</td>
                        <td class=\"text-left\">
                          ";
            // line 1822
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1823
                echo "                            <div class=\"input-group\">
                              <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\"><img src=\"language/";
                // line 1825
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1825);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1825);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1825);
                echo "\"/></span>
                              </div>
                              <input type=\"text\" name=\"product_seo_url[";
                // line 1827
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1827);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1827);
                echo "]\" value=\"";
                if ((($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = (($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = ($context["product_seo_url"] ?? null)) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1827)] ?? null) : null)) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1827)] ?? null) : null)) {
                    echo (($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = (($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = ($context["product_seo_url"] ?? null)) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1827)] ?? null) : null)) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1827)] ?? null) : null);
                }
                echo "\" placeholder=\"";
                echo ($context["entry_keyword"] ?? null);
                echo "\" class=\"form-control\"/>
                            </div>
                            ";
                // line 1829
                if ((($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = (($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = ($context["error_keyword"] ?? null)) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1829)] ?? null) : null)) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1829)] ?? null) : null)) {
                    // line 1830
                    echo "                              <div class=\"invalid-tooltip\">";
                    echo (($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = (($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = ($context["error_keyword"] ?? null)) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1830)] ?? null) : null)) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1830)] ?? null) : null);
                    echo "</div>
                            ";
                }
                // line 1832
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1835
        echo "                  </tbody>
                </table>
              </div>
            </div>

            <div id=\"tab-design\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-layout\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1845
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1846
        echo ($context["entry_layout"] ?? null);
        echo "
                        ";
        // line 1847
        if (($context["master_id"] ?? null)) {
            // line 1848
            echo "                          <div class=\"custom-control custom-switch float-right\">
                            ";
            // line 1849
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_layout", [], "any", false, false, false, 1849)) {
                // line 1850
                echo "                              <input type=\"checkbox\" name=\"override[product_layout]\" value=\"1\" id=\"input-variant-product-layout\" data-toggle=\"switch\" data-target=\"#product-layout\" class=\"custom-control-input\" checked/>
                            ";
            } else {
                // line 1852
                echo "                              <input type=\"checkbox\" name=\"override[product_layout]\" value=\"1\" id=\"input-variant-product-layout\" data-toggle=\"switch\" data-target=\"#product-layout\" class=\"custom-control-input\"/>
                            ";
            }
            // line 1854
            echo "                            <label for=\"input-variant-product-layout\" class=\"custom-control-label\"></label>
                          </div>
                        ";
        }
        // line 1857
        echo "                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1861
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1862
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 1863
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1863);
            echo "</td>
                        <td class=\"text-left\"><select name=\"product_layout[";
            // line 1864
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1864);
            echo "]\" class=\"form-control\">
                            <option value=\"\"></option>
                            ";
            // line 1866
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1867
                echo "                              ";
                if (((($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = ($context["product_layout"] ?? null)) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1867)] ?? null) : null) && (0 === twig_compare((($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = ($context["product_layout"] ?? null)) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1867)] ?? null) : null), twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1867))))) {
                    // line 1868
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1868);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1868);
                    echo "</option>
                              ";
                } else {
                    // line 1870
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1870);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1870);
                    echo "</option>
                              ";
                }
                // line 1872
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1873
            echo "                          </select></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1876
        echo "                  </tbody>
                </table>
              </div>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('textarea[data-toggle=\\'ckeditor\\']').ckeditor();

// Manufacturer
\$('input[name=\\'manufacturer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 1894
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({
\t\t\t\t\tmanufacturer_id: 0,
\t\t\t\t\tname: '";
        // line 1899
        echo ($context["text_none"] ?? null);
        echo "'
\t\t\t\t});

\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['manufacturer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'manufacturer\\']').val(item['label']);
\t\t\$('input[name=\\'manufacturer_id\\']').val(item['value']);
\t}
});

// Category
\$('input[name=\\'category\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 1921
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'category\\']').val('');

\t\t\$('#product-category' + item['value']).remove();

\t\thtml = '<tr id=\"product-category' + item['value'] + '\">';
\t\thtml += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\"/></td>';
\t\thtml += '  <td class=\"text-right\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-minus-circle\"></i></button></td>';
\t\thtml += '</tr>';

\t\t\$('#product-category').append(html);
\t}
});

\$('#product-category').on('click', '.btn', function() {
\t\$(this).parent().parent().remove();
});

// Filter
\$('input[name=\\'filter\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/filter/autocomplete&user_token=";
        // line 1955
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['filter_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter\\']').val('');

\t\t\$('#product-filter' + item['value']).remove();

\t\thtml = '<tr id=\"product-filter' + item['value'] + '\">';
\t\thtml += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\"/></td>';
\t\thtml += '  <td class=\"text-right\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-minus-circle\"></i></button></td>';
\t\thtml += '</tr>';

\t\t\$('#product-filter').append(html);
\t}
});

\$('#product-filter').on('click', '.btn', function() {
\t\$(this).parent().parent().remove();
});

// Downloads
\$('input[name=\\'download\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/download/autocomplete&user_token=";
        // line 1989
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['download_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'download\\']').val('');

\t\t\$('#product-download' + item['value']).remove();

\t\thtml = '<tr id=\"product-download' + item['value'] + '\">';
\t\thtml += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\"/></td>';
\t\thtml += '  <td class=\"text-right\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-minus-circle\"></i></button></td>';
\t\thtml += '</tr>';

\t\t\$('#product-download').append(html);
\t}
});

\$('#product-download').on('click', '.btn', function() {
\t\$(this).parent().parent().remove();
});

// Related
\$('input[name=\\'related\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 2023
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
\t\t\$('input[name=\\'related\\']').val('');

\t\t\$('#product-related' + item['value']).remove();

\t\thtml = '<tr id=\"product-related' + item['value'] + '\">';
\t\thtml += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\"/></td>';
\t\thtml += '  <td class=\"text-right\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-minus-circle\"></i></button></td>';
\t\thtml += '</tr>';

\t\t\$('#product-related').append(html);
\t}
});

\$('#product-related').on('click', '.btn', function() {
\t\$(this).parent().parent().remove();
});
//--></script>
<script type=\"text/javascript\"><!--
var attribute_row = ";
        // line 2054
        echo ($context["attribute_row"] ?? null);
        echo ";

\$('#button-attribute').on('click', function() {
\thtml = '<tr id=\"attribute-row' + attribute_row + '\">';
\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 2058
        echo ($context["entry_attribute"] ?? null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
\thtml += '  <td class=\"text-left\">';
  ";
        // line 2060
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2061
            echo "\thtml += '<div class=\"input-group\">';
\thtml += '  <div class=\"input-group-prepend\"><span class=\"input-group-text\"><img src=\"language/";
            // line 2062
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2062);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2062);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2062);
            echo "\" /></span></div>';
\thtml += '  <textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            // line 2063
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2063);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\"></textarea>';
\thtml += '</div>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2066
        echo "\thtml += '  </td>';
\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2067
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#product-attribute').append(html);

\tattributeautocomplete(attribute_row);

\tattribute_row++;
});

function attributeautocomplete(attribute_row) {
\t\$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').autocomplete({
\t\t'source': function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=catalog/attribute/autocomplete&user_token=";
        // line 2081
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tcategory: item.attribute_group,
\t\t\t\t\t\t\tlabel: item.name,
\t\t\t\t\t\t\tvalue: item.attribute_id
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t\t'select': function(item) {
\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(item['label']);
\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(item['value']);
\t\t}
\t});
}

\$('#product-attribute tr').each(function(index, element) {
\tattributeautocomplete(index);
});
//--></script>
<script type=\"text/javascript\"><!--
";
        // line 2106
        if ( !($context["master_id"] ?? null)) {
            // line 2107
            echo "var option_row = ";
            echo ($context["option_row"] ?? null);
            echo ";

\$('input[name=\\'option\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/option/autocomplete&user_token=";
            // line 2112
            echo ($context["user_token"] ?? null);
            echo "&filter_name=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tcategory: item['category'],
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['option_id'],
\t\t\t\t\t\ttype: item['type'],
\t\t\t\t\t\toption_value: item['option_value']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\thtml = '<fieldset id=\"option-row' + option_row + '\">';
\t\thtml += '  <legend>' + item['label'] + ' <button type=\"button\" class=\"btn btn-danger btn-sm float-right\" onclick=\"\$(\\'#option-row' + option_row + '\\').remove();\"><i class=\"fas fa-minus-circle\"></i></button></legend>';
\t\thtml += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
\t\thtml += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
\t\thtml += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
\t\thtml += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

\t\thtml += '  <div class=\"form-group row\">';
\t\thtml += '    <label for=\"input-required' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 2136
            echo ($context["entry_required"] ?? null);
            echo "</label>';
\t\thtml += '\t <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
\t\thtml += '\t   <option value=\"1\">";
            // line 2138
            echo ($context["text_yes"] ?? null);
            echo "</option>';
\t\thtml += '\t   <option value=\"0\">";
            // line 2139
            echo ($context["text_no"] ?? null);
            echo "</option>';
\t\thtml += '\t </select></div>';
\t\thtml += '  </div>';

\t\tif (item['type'] == 'text') {
\t\t\thtml += '\t<div class=\"form-group row\">';
\t\t\thtml += '\t  <label for=\"input-option' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 2145
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 2146
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-option' + option_row + '\" class=\"form-control\" /></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'textarea') {
\t\t\thtml += '\t<div class=\"form-group row\">';
\t\t\thtml += '\t  <label for=\"input-option' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 2152
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
            // line 2153
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-option' + option_row + '\" class=\"form-control\"></textarea></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'file') {
\t\t\thtml += '\t<div class=\"form-group row d-none\">';
\t\t\thtml += '\t  <label for=\"input-option' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 2159
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10 d-none\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 2160
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-option' + option_row + '\" class=\"form-control\" /></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'date') {
\t\t\thtml += '\t<div class=\"form-group row\">';
\t\t\thtml += '\t  <label for=\"input-option' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 2166
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10 col-md-4\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 2167
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-option' + option_row + '\" class=\"form-control\" /><div class=\"input-group-append\"><div class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></div></div></div></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'time') {
\t\t\thtml += '\t<div class=\"form-group row\">';
\t\t\thtml += '\t  <label for=\"input-option' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 2173
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10 col-md-4\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 2174
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-option' + option_row + '\" class=\"form-control\" /><div class=\"input-group-append\"><div class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></div></div></div></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'datetime') {
\t\t\thtml += '\t<div class=\"form-group row\">';
\t\t\thtml += '\t  <label for=\"input-option' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 2180
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10 col-md-4\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 2181
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-option' + option_row + '\" class=\"form-control\" /><div class=\"input-group-append\"><div class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></div></div></div></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
\t\t\thtml += '<div class=\"table-responsive\">';
\t\t\thtml += '  <table id=\"option-value' + option_row + '\" class=\"table table-bordered table-hover\">';
\t\t\thtml += '  \t <thead>';
\t\t\thtml += '      <tr>';
\t\t\thtml += '        <td class=\"text-left\">";
            // line 2190
            echo ($context["entry_option_value"] ?? null);
            echo "</td>';
\t\t\thtml += '        <td class=\"text-right\">";
            // line 2191
            echo ($context["entry_quantity"] ?? null);
            echo "</td>';
\t\t\thtml += '        <td class=\"text-left\">";
            // line 2192
            echo ($context["entry_subtract"] ?? null);
            echo "</td>';
\t\t\thtml += '        <td class=\"text-right\">";
            // line 2193
            echo ($context["entry_price"] ?? null);
            echo "</td>';
\t\t\thtml += '        <td class=\"text-right\">";
            // line 2194
            echo ($context["entry_points"] ?? null);
            echo "</td>';
\t\t\thtml += '        <td class=\"text-right\">";
            // line 2195
            echo ($context["entry_weight"] ?? null);
            echo "</td>';
\t\t\thtml += '        <td></td>';
\t\t\thtml += '      </tr>';
\t\t\thtml += '    </thead>';
\t\t\thtml += '    <tbody></tbody>';
\t\t\thtml += '    <tfoot>';
\t\t\thtml += '      <tr>';
\t\t\thtml += '        <td colspan=\"5\"></td>';
\t\t\thtml += '        <td class=\"text-right\"><button type=\"button\" data-option-row=\"' + option_row + '\" data-toggle=\"tooltip\" title=\"";
            // line 2203
            echo ($context["button_option_value_add"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>';
\t\t\thtml += '      </tr>';
\t\t\thtml += '    </tfoot>';
\t\t\thtml += '  </table>';
\t\t\thtml += '</div>';

\t\t\thtml += '  <select id=\"product-option-values' + option_row + '\" class=\"d-none\">';

\t\t\tfor (i = 0; i < item['option_value'].length; i++) {
\t\t\t\thtml += '<option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
\t\t\t}

\t\t\thtml += '  </select>';
\t\t\thtml += '</fieldset>';
\t\t}

\t\t\$('#option').append(html);

\t\t\$('[data-toggle=\\'tooltip\\']').tooltip({
\t\t\tcontainer: 'body',
\t\t\thtml: true
\t\t});

\t\t\$('.date').datetimepicker({
\t\t\t'format': 'YYYY-MM-DD',
\t\t\t'locale': '";
            // line 2228
            echo ($context["datepicker"] ?? null);
            echo "',
\t\t\t'allowInputToggle': true
\t\t});

\t\t\$('.time').datetimepicker({
\t\t\t'format': 'HH:mm',
\t\t\t'locale': '";
            // line 2234
            echo ($context["datepicker"] ?? null);
            echo "',
\t\t\t'allowInputToggle': true
\t\t});

\t\t\$('.datetime').datetimepicker({
\t\t\t'format': 'YYYY-MM-DD HH:mm',
\t\t\t'locale': '";
            // line 2240
            echo ($context["datepicker"] ?? null);
            echo "',
\t\t\t'allowInputToggle': true
\t\t});

\t\toption_row++;
\t}
});
//--></script>
<script type=\"text/javascript\"><!--
var option_value_row = ";
            // line 2249
            echo ($context["option_value_row"] ?? null);
            echo ";

\$('#option').on('click', '.btn-primary', function() {
\tvar element = this;

\tif (\$(element).attr('data-option-value-row')) {
\t\telement.option_value_row = \$(element).attr('data-option-value-row');
\t} else {
\t\telement.option_value_row = option_value_row;
\t}

\t\$('.modal').remove();

\thtml = '<div id=\"modal-option\" class=\"modal fade\">';
\thtml += '  <div class=\"modal-dialog\">';
\thtml += '    <div class=\"modal-content\">';
\thtml += '      <div class=\"modal-header\">';
\thtml += '        <h5 class=\"modal-title\"><i class=\"fas fa-pencil-alt\"></i> ";
            // line 2266
            echo ($context["text_option_value"] ?? null);
            echo "</h5> <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>';
\thtml += '      </div>';
\thtml += '      <div class=\"modal-body\">';
\thtml += '        <div class=\"form-group\">';
\thtml += '      \t   <label for=\"input-modal-option-value\" class=\"col-form-label\">";
            // line 2270
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
\thtml += '      \t   <select name=\"option_value_id\" id=\"input-modal-option-value\" class=\"form-control\">';

\toption_value = \$('#product-option-values' + \$(element).attr('data-option-row') + ' option');

\tfor (i = 0; i < option_value.length; i++) {
\t\tif (\$(element).attr('data-option-value-row') && \$(option_value[i]).val() == \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\\']').val()) {
\t\t\thtml += '<option value=\"' + \$(option_value[i]).val() + '\" selected=\"selected\">' + \$(option_value[i]).text() + '</option>';
\t\t} else {
\t\t\thtml += '<option value=\"' + \$(option_value[i]).val() + '\">' + \$(option_value[i]).text() + '</option>';
\t\t}
\t}

\thtml += '      \t   </select>';
\thtml += '          <input type=\"hidden\" name=\"product_option_value_id\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\\']').val() : '') + '\"/>';
\thtml += '        </div>';

\thtml += '        <div class=\"form-group\">';
\thtml += '      \t   <label for=\"input-modal-quantity\" class=\"col-form-label\">";
            // line 2288
            echo ($context["entry_quantity"] ?? null);
            echo "</label>';
\thtml += '      \t   <input type=\"text\" name=\"quantity\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\\']').val() : '1') + '\" placeholder=\"";
            // line 2289
            echo ($context["entry_quantity"] ?? null);
            echo "\" id=\"input-modal-quantity\" class=\"form-control\"/>';
\thtml += '        </div>';

\thtml += '        <div class=\"form-group\">';
\thtml += '      \t   <label for=\"input-modal-subtract\" class=\"col-form-label\">";
            // line 2293
            echo ($context["entry_subtract"] ?? null);
            echo "</label>';
\thtml += '      \t   <select name=\"subtract\" id=\"input-modal-subtract\" class=\"form-control\">';

\tif (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\\']').val() == '1') {
\t\thtml += '        <option value=\"1\" selected=\"selected\">";
            // line 2297
            echo ($context["text_yes"] ?? null);
            echo "</option>';
\t\thtml += '      \t <option value=\"0\">";
            // line 2298
            echo ($context["text_no"] ?? null);
            echo "</option>';
\t} else {
\t\thtml += '      \t <option value=\"1\">";
            // line 2300
            echo ($context["text_yes"] ?? null);
            echo "</option>';
\t\thtml += '      \t <option value=\"0\" selected=\"selected\">";
            // line 2301
            echo ($context["text_no"] ?? null);
            echo "</option>';
\t}

\thtml += '      \t   </select>';
\thtml += '        </div>';

\thtml += '        <div class=\"form-group\">';
\thtml += '      \t   <label for=\"input-modal-price\" class=\"col-form-label\">";
            // line 2308
            echo ($context["entry_price"] ?? null);
            echo "</label>';
\thtml += '          <div class=\"input-group\">';
\thtml += '            <select name=\"price_prefix\" class=\"form-control col-2\">';

\tif (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '+') {
\t\thtml += '      \t   <option value=\"+\" selected=\"selected\">+</option>';
\t} else {
\t\thtml += '      \t   <option value=\"+\">+</option>';
\t}

\tif (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '-') {
\t\thtml += '      \t       <option value=\"-\" selected=\"selected\">-</option>';
\t} else {
\t\thtml += '      \t       <option value=\"-\">-</option>';
\t}

\thtml += '      \t     </select>';
\thtml += '      \t     <input type=\"text\" name=\"price\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\\']').val() : '0') + '\" placeholder=\"";
            // line 2325
            echo ($context["entry_price"] ?? null);
            echo "\" id=\"input-modal-price\" class=\"form-control\"/>';
\thtml += '          </div>';
\thtml += '        </div>';

\thtml += '        <div class=\"form-group\">';
\thtml += '      \t   <label for=\"input-modal-points\" class=\"col-form-label\">";
            // line 2330
            echo ($context["entry_points"] ?? null);
            echo "</label>';
\thtml += '          <div class=\"input-group\">';
\thtml += '      \t     <select name=\"points_prefix\" class=\"form-control col-2\">';

\tif (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '+') {
\t\thtml += '      \t       <option value=\"+\" selected>+</option>';
\t} else {
\t\thtml += '      \t       <option value=\"+\">+</option>';
\t}

\tif (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '-') {
\t\thtml += '      \t       <option value=\"-\" selected>-</option>';
\t} else {
\t\thtml += '      \t       <option value=\"-\">-</option>';
\t}

\thtml += '      \t     </select>';
\thtml += '      \t     <input type=\"text\" name=\"points\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\\']').val() : '0') + '\" placeholder=\"";
            // line 2347
            echo ($context["entry_points"] ?? null);
            echo "\" id=\"input-modal-points\" class=\"form-control\"/>';
\thtml += '          </div>';
\thtml += '        </div>';

\thtml += '        <div class=\"form-group\">';
\thtml += '      \t   <label for=\"input-modal-weight\" class=\"col-form-label\">";
            // line 2352
            echo ($context["entry_weight"] ?? null);
            echo "</label>';
\thtml += '          <div class=\"input-group\">';
\thtml += '      \t     <select name=\"weight_prefix\" class=\"form-control col-2\">';

\tif (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '+') {
\t\thtml += '      \t       <option value=\"+\" selected>+</option>';
\t} else {
\t\thtml += '      \t       <option value=\"+\">+</option>';
\t}

\tif (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '-') {
\t\thtml += '      \t       <option value=\"-\" selected>-</option>';
\t} else {
\t\thtml += '      \t       <option value=\"-\">-</option>';
\t}

\thtml += '      \t     </select>';
\thtml += '      \t     <input type=\"text\" name=\"weight\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\\']').val() : '0') + '\" placeholder=\"";
            // line 2369
            echo ($context["entry_weight"] ?? null);
            echo "\" id=\"input-modal-weight\" class=\"form-control\" />';
\thtml += '          </div>';
\thtml += '        </div>';

\thtml += '      </div>';

\thtml += '      <div class=\"modal-footer\">';
\thtml += '\t     <button type=\"button\" id=\"button-save\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\" class=\"btn btn-primary\">";
            // line 2376
            echo ($context["button_save"] ?? null);
            echo "</button> <button type=\"button\" class=\"btn btn-light\" data-dismiss=\"modal\">";
            echo ($context["button_cancel"] ?? null);
            echo "</button>';
\thtml += '      </div>';
\thtml += '    </div>';
\thtml += '  </div>';
\thtml += '</div>';

\t\$('body').append(html);

\t\$('#modal-option').modal('show');

\t\$('#modal-option #button-save').on('click', function() {
\t\thtml = '<tr id=\"option-value-row' + element.option_value_row + '\">';
\t\thtml += '  <td class=\"text-left\">' + \$('#modal-option select[name=\\'option_value_id\\'] option:selected').text() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\" value=\"' + \$('#modal-option select[name=\\'option_value_id\\']').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\" value=\"' + \$('#modal-option input[name=\\'product_option_value_id\\']').val() + '\"/></td>';
\t\thtml += '  <td class=\"text-right\">' + \$('#modal-option input[name=\\'quantity\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\" value=\"' + \$('#modal-option input[name=\\'quantity\\']').val() + '\"/></td>';
\t\thtml += '  <td class=\"text-left\">' + (\$('#modal-option select[name=\\'subtract\\'] option:selected').val() == '1' ? '";
            // line 2390
            echo ($context["text_yes"] ?? null);
            echo "' : '";
            echo ($context["text_no"] ?? null);
            echo "') + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\" value=\"' + \$('#modal-option select[name=\\'subtract\\'] option:selected').val() + '\"/></td>';
\t\thtml += '  <td class=\"text-right\">' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'price\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\" value=\"' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\" value=\"' + \$('#modal-option input[name=\\'price\\']').val() + '\"/></td>';
\t\thtml += '  <td class=\"text-right\"> ' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'points\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\" value=\"' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\" value=\"' + \$('#modal-option input[name=\\'points\\']').val() + '\"/></td>';
\t\thtml += '  <td class=\"text-right\">' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'weight\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\" value=\"' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\" value=\"' + \$('#modal-option input[name=\\'weight\\']').val() + '\"/></td>';
\t\thtml += '  <td class=\"text-right\"><button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 2394
            echo ($context["button_edit"] ?? null);
            echo "\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\"class=\"btn btn-primary\"><i class=\"fas fa-pencil-alt\"></i></button> <button type=\"button\" onclick=\"\$(this).tooltip(\\'dispose\\'); \$(\\'#option-value-row' + element.option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t\thtml += '</tr>';

\t\tif (\$(element).attr('data-option-value-row')) {
\t\t\t\$('#option-value-row' + element.option_value_row).replaceWith(html);
\t\t} else {
\t\t\t\$('#option-value' + \$(element).attr('data-option-row')).append(html);

\t\t\toption_value_row++;
\t\t}

\t\t\$('[rel=tooltip]').tooltip();

\t\t\$('#modal-option').modal('hide');
\t});
});
";
        }
        // line 2411
        echo "//--></script>
<script type=\"text/javascript\"><!--
var discount_row = ";
        // line 2413
        echo ($context["discount_row"] ?? null);
        echo ";

\$('#button-discount').on('click', function() {
\thtml = '<tr id=\"discount-row' + discount_row + '\">';
\thtml += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
  ";
        // line 2418
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2419
            echo "\thtml += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2419);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2419), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2421
        echo "\thtml += '  </select><input type=\"hidden\" name=\"product_discount[' + discount_row + '][product_discount_id]\" value=\"\"/></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 2422
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 2423
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 2424
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 2425
        echo ($context["entry_date_start"] ?? null);
        echo "\" class=\"form-control\" /><div class=\"input-group-append\"><div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div></div></div></td>';
\thtml += '  <td class=\"text-left\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 2426
        echo ($context["entry_date_end"] ?? null);
        echo "\" class=\"form-control\" /><div class=\"input-group-append\"><div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div></div></div></td>';
\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2427
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#product-discount').append(html);

\t\$('.date').datetimepicker({
\t\t'format': 'YYYY-MM-DD',
\t\t'locale': '";
        // line 2434
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t'allowInputToggle': true
\t});

\tdiscount_row++;
});
//--></script>
<script type=\"text/javascript\"><!--
var special_row = ";
        // line 2442
        echo ($context["special_row"] ?? null);
        echo ";

\$('#button-special').on('click', function() {
\thtml = '<tr id=\"special-row' + special_row + '\">';
\thtml += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
  ";
        // line 2447
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2448
            echo "\thtml += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2448);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2448), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2450
        echo "\thtml += '  </select><input type=\"hidden\" name=\"product_special[' + special_row + '][product_special_id]\" value=\"\"/></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 2451
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 2452
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 2453
        echo ($context["entry_date_start"] ?? null);
        echo "\" class=\"form-control\" /><div class=\"input-group-append\"><div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div></div></div></td>';
\thtml += '  <td class=\"text-left\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 2454
        echo ($context["entry_date_end"] ?? null);
        echo "\" class=\"form-control\" /><div class=\"input-group-append\"><div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div></div></div></td>';
\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2455
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#product-special').append(html);

\t\$('.date').datetimepicker({
\t\t'format': 'YYYY-MM-DD',
\t\t'locale': '";
        // line 2462
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t'allowInputToggle': true
\t});

\tspecial_row++;
});
//--></script>
<script type=\"text/javascript\"><!--
var image_row = ";
        // line 2470
        echo ($context["image_row"] ?? null);
        echo ";

\$('#button-image').on('click', function() {
\thtml = '<tr id=\"image-row' + image_row + '\">';
\thtml += '  <td><div class=\"card image\">';
\thtml += '    <img src=\"";
        // line 2475
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image' + image_row + '\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\"/>';
\thtml += '    <div class=\"card-body\">';
\thtml += '      <button type=\"button\" data-toggle=\"image\" data-target=\"#input-image' + image_row + '\" data-thumb=\"#thumb-image' + image_row + '\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 2477
        echo ($context["button_edit"] ?? null);
        echo "</button>';
\thtml += '      <button type=\"button\" data-toggle=\"clear\" data-target=\"#input-image' + image_row + '\" data-thumb=\"#thumb-image' + image_row + '\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i> ";
        // line 2478
        echo ($context["button_clear"] ?? null);
        echo "</button>';
\thtml += '    </div>';
\thtml += '  </div></td>';
\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"0\" placeholder=\"";
        // line 2481
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\"/></td>';
\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2482
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#product-image').append(html);

\timage_row++;
});
//--></script>
<script type=\"text/javascript\"><!--
var recurring_row = ";
        // line 2491
        echo ($context["recurring_row"] ?? null);
        echo ";

\$('#button-recurring').on('click', function() {
\thtml = '<tr id=\"recurring-row' + recurring_row + '\">';
\thtml += '  <td class=\"text-left\"><select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">';
  ";
        // line 2496
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 2497
            echo "\thtml += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 2497);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 2497), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2499
        echo "\thtml += '  </select></td>';
\thtml += '  <td class=\"text-left\"><select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">';
  ";
        // line 2501
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2502
            echo "\thtml += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2502);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2502), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2504
        echo "\thtml += '  <select></td>';
\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 2505
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#product-recurring').append(html);

\trecurring_row++;
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#content').on('click', 'button[id^=\\'button-upload\\']', function() {
\tvar element = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
\t\tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload/upload&user_token=";
        // line 2532
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(element).parent().find('.invalid-tooltip').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(element).parent().find('input[type=\\'hidden\\']').after('<div class=\"invalid-tooltip d-block\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);
\t\t\t\t\t}

\t\t\t\t\tif (json['code']) {
\t\t\t\t\t\t\$(element).parent().find('input[type=\\'hidden\\']').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});

\$('.date').datetimepicker({
\t'format': 'YYYY-MM-DD',
\t'locale': '";
        // line 2570
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});

\$('.time').datetimepicker({
\t'format': 'HH:mm',
\t'locale': '";
        // line 2576
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});

\$('.datetime').datetimepicker({
\t'format': 'YYYY-MM-DD HH:mm',
\t'locale': '";
        // line 2582
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});


";
        // line 2587
        if (($context["master_id"] ?? null)) {
            // line 2588
            echo "// Variable products
\$('input[data-toggle=\\'switch\\']').on('change', function(e) {
\tvar element = this;

\tvar target = \$(this).attr('data-target');


\t// First we need to grab the default values
\t\$(target).each(function() {


\t\t// Table
\t\tif (\$(this).is('table')) {
\t\t\tif (!\$(element).prop('checked')) {

\t\t\t\t\$(element).html(\$(this).html());
\t\t\t}

\t\t\tconsole.log(this);

\t\t\t//\$(this).prop('disabled', !\$(element).prop('checked'));
\t\t}
\t});


\t// Now we need to enable or disable any fields in the targets
\t\$.merge(\$(target), \$(target).find('input, textarea, select, button')).not('.custom-control-input').each(function() {
\t\t// Text Textarea
\t\tif (\$(this).is('input[type=\\'text\\'], textarea')) {
\t\t\t\$(this).prop('readonly', !\$(element).prop('checked'));
\t\t}

\t\t// CKEditor readonly
\t\tif (\$(this).is('[data-toggle=\\'ckeditor\\']')) {
\t\t\tvar editor = CKEDITOR.instances[\$(this).attr('id')];

\t\t\tif (editor.editable() == undefined) {
\t\t\t\teditor.on('instanceReady', function() {
\t\t\t\t\tthis.setReadOnly(!\$(element).prop('checked'));
\t\t\t\t});
\t\t\t} else {
\t\t\t\teditor.setReadOnly(!\$(element).prop('checked'));
\t\t\t}
\t\t}

\t\t// Radio Checkbox
\t\tif (\$(this).is('input[type=\\'radio\\'], input[type=\\'checkbox\\'], div[data-toggle=\\'buttons\\']')) {
\t\t\tif (!\$(element).prop('checked')) {
\t\t\t\t\$(this).on('click', function(e) {
\t\t\t\t\treturn false;
\t\t\t\t});
\t\t\t} else {
\t\t\t\t\$(this).off('click');
\t\t\t}
\t\t}

\t\t// Select
\t\tif (\$(this).is('select')) {
\t\t\tif (!\$(element).prop('checked')) {
\t\t\t\t\$(this).attr('readonly', 'readonly');
\t\t\t} else {
\t\t\t\t\$(this).removeAttr('readonly');
\t\t\t}

\t\t\t\$(this).find('option').not(':selected').prop('disabled', !\$(element).prop('checked'));
\t\t}

\t\t// Button
\t\tif (\$(this).is('button')) {
\t\t\t\$(this).prop('disabled', !\$(element).prop('checked'));
\t\t}


\t});


});

\$('.custom-control-input').trigger('change');

/*
\$(document).ready(function() {

\$.ajax({
    url: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
            // line 2672
            echo ($context["user_token"] ?? null);
            echo "&filter_name=',
    dataType: 'json',
    success: function(json) {
        html = '<tr id=\"product-category' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-right\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-category').append(html);
    }
});
});

\$('input[data-toggle=\\'switch\\']').on('change', function(e) {


});
*/
";
        }
        // line 2691
        echo "//--></script>
<script type=\"text/javascript\"><!--
\$('#language li:first-child a').tab('show');
//--></script>
";
        // line 2695
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/product_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  5946 => 2695,  5940 => 2691,  5918 => 2672,  5832 => 2588,  5830 => 2587,  5822 => 2582,  5813 => 2576,  5804 => 2570,  5763 => 2532,  5733 => 2505,  5730 => 2504,  5719 => 2502,  5715 => 2501,  5711 => 2499,  5700 => 2497,  5696 => 2496,  5688 => 2491,  5676 => 2482,  5672 => 2481,  5666 => 2478,  5662 => 2477,  5655 => 2475,  5647 => 2470,  5636 => 2462,  5626 => 2455,  5622 => 2454,  5618 => 2453,  5614 => 2452,  5610 => 2451,  5607 => 2450,  5596 => 2448,  5592 => 2447,  5584 => 2442,  5573 => 2434,  5563 => 2427,  5559 => 2426,  5555 => 2425,  5551 => 2424,  5547 => 2423,  5543 => 2422,  5540 => 2421,  5529 => 2419,  5525 => 2418,  5517 => 2413,  5513 => 2411,  5491 => 2394,  5482 => 2390,  5463 => 2376,  5453 => 2369,  5433 => 2352,  5425 => 2347,  5405 => 2330,  5397 => 2325,  5377 => 2308,  5367 => 2301,  5363 => 2300,  5358 => 2298,  5354 => 2297,  5347 => 2293,  5340 => 2289,  5336 => 2288,  5315 => 2270,  5308 => 2266,  5288 => 2249,  5276 => 2240,  5267 => 2234,  5258 => 2228,  5230 => 2203,  5219 => 2195,  5215 => 2194,  5211 => 2193,  5207 => 2192,  5203 => 2191,  5199 => 2190,  5187 => 2181,  5183 => 2180,  5174 => 2174,  5170 => 2173,  5161 => 2167,  5157 => 2166,  5148 => 2160,  5144 => 2159,  5135 => 2153,  5131 => 2152,  5122 => 2146,  5118 => 2145,  5109 => 2139,  5105 => 2138,  5100 => 2136,  5073 => 2112,  5064 => 2107,  5062 => 2106,  5034 => 2081,  5017 => 2067,  5014 => 2066,  5003 => 2063,  4995 => 2062,  4992 => 2061,  4988 => 2060,  4983 => 2058,  4976 => 2054,  4942 => 2023,  4905 => 1989,  4868 => 1955,  4831 => 1921,  4806 => 1899,  4798 => 1894,  4778 => 1876,  4770 => 1873,  4764 => 1872,  4756 => 1870,  4748 => 1868,  4745 => 1867,  4741 => 1866,  4736 => 1864,  4732 => 1863,  4729 => 1862,  4725 => 1861,  4719 => 1857,  4714 => 1854,  4710 => 1852,  4706 => 1850,  4704 => 1849,  4701 => 1848,  4699 => 1847,  4695 => 1846,  4691 => 1845,  4679 => 1835,  4666 => 1832,  4660 => 1830,  4658 => 1829,  4645 => 1827,  4636 => 1825,  4632 => 1823,  4628 => 1822,  4623 => 1820,  4620 => 1819,  4616 => 1818,  4609 => 1814,  4605 => 1813,  4597 => 1808,  4588 => 1801,  4577 => 1798,  4573 => 1797,  4570 => 1796,  4566 => 1795,  4560 => 1791,  4555 => 1788,  4551 => 1786,  4547 => 1784,  4545 => 1783,  4542 => 1782,  4540 => 1781,  4536 => 1780,  4532 => 1779,  4524 => 1774,  4516 => 1769,  4513 => 1768,  4506 => 1763,  4502 => 1761,  4498 => 1759,  4496 => 1758,  4491 => 1755,  4489 => 1754,  4483 => 1753,  4477 => 1750,  4472 => 1748,  4459 => 1738,  4453 => 1734,  4447 => 1733,  4445 => 1732,  4438 => 1730,  4430 => 1729,  4419 => 1725,  4411 => 1724,  4396 => 1722,  4389 => 1719,  4384 => 1718,  4382 => 1717,  4376 => 1713,  4371 => 1711,  4367 => 1709,  4363 => 1707,  4361 => 1706,  4358 => 1705,  4356 => 1704,  4352 => 1703,  4348 => 1702,  4340 => 1697,  4332 => 1691,  4326 => 1687,  4322 => 1685,  4318 => 1683,  4316 => 1682,  4312 => 1680,  4310 => 1679,  4306 => 1678,  4302 => 1677,  4293 => 1675,  4286 => 1671,  4274 => 1662,  4268 => 1658,  4262 => 1657,  4260 => 1656,  4253 => 1654,  4240 => 1648,  4225 => 1640,  4215 => 1637,  4207 => 1636,  4204 => 1635,  4198 => 1634,  4190 => 1632,  4182 => 1630,  4179 => 1629,  4175 => 1628,  4171 => 1627,  4166 => 1626,  4161 => 1625,  4159 => 1624,  4153 => 1620,  4148 => 1618,  4144 => 1616,  4140 => 1614,  4138 => 1613,  4135 => 1612,  4133 => 1611,  4129 => 1610,  4125 => 1609,  4121 => 1608,  4117 => 1607,  4113 => 1606,  4098 => 1594,  4092 => 1590,  4086 => 1589,  4084 => 1588,  4077 => 1586,  4064 => 1580,  4049 => 1572,  4039 => 1569,  4031 => 1568,  4023 => 1567,  4020 => 1566,  4014 => 1565,  4006 => 1563,  3998 => 1561,  3995 => 1560,  3991 => 1559,  3987 => 1558,  3982 => 1557,  3977 => 1556,  3975 => 1555,  3969 => 1551,  3964 => 1549,  3960 => 1547,  3956 => 1545,  3954 => 1544,  3951 => 1543,  3949 => 1542,  3945 => 1541,  3941 => 1540,  3937 => 1539,  3933 => 1538,  3929 => 1537,  3925 => 1536,  3910 => 1524,  3904 => 1520,  3898 => 1519,  3896 => 1518,  3889 => 1516,  3886 => 1515,  3880 => 1514,  3872 => 1512,  3864 => 1510,  3861 => 1509,  3857 => 1508,  3853 => 1507,  3850 => 1506,  3844 => 1505,  3836 => 1503,  3828 => 1501,  3825 => 1500,  3821 => 1499,  3817 => 1498,  3812 => 1497,  3807 => 1496,  3805 => 1495,  3799 => 1491,  3794 => 1488,  3790 => 1486,  3786 => 1484,  3784 => 1483,  3781 => 1482,  3779 => 1481,  3774 => 1479,  3770 => 1478,  3762 => 1472,  3758 => 1470,  3750 => 1467,  3745 => 1464,  3739 => 1462,  3737 => 1461,  3728 => 1456,  3718 => 1454,  3708 => 1452,  3706 => 1451,  3692 => 1444,  3684 => 1441,  3677 => 1440,  3675 => 1439,  3672 => 1438,  3667 => 1435,  3661 => 1433,  3659 => 1432,  3650 => 1427,  3640 => 1425,  3630 => 1423,  3628 => 1422,  3614 => 1415,  3606 => 1412,  3599 => 1411,  3597 => 1410,  3594 => 1409,  3589 => 1406,  3583 => 1404,  3581 => 1403,  3572 => 1398,  3562 => 1396,  3552 => 1394,  3550 => 1393,  3536 => 1386,  3528 => 1383,  3521 => 1382,  3519 => 1381,  3516 => 1380,  3511 => 1377,  3505 => 1375,  3503 => 1374,  3495 => 1370,  3485 => 1368,  3475 => 1366,  3473 => 1365,  3463 => 1362,  3455 => 1361,  3449 => 1358,  3442 => 1357,  3440 => 1356,  3437 => 1355,  3432 => 1352,  3426 => 1350,  3424 => 1349,  3415 => 1344,  3405 => 1342,  3395 => 1340,  3393 => 1339,  3380 => 1335,  3372 => 1332,  3365 => 1331,  3363 => 1330,  3360 => 1329,  3355 => 1326,  3349 => 1324,  3347 => 1323,  3338 => 1318,  3328 => 1316,  3318 => 1314,  3316 => 1313,  3303 => 1309,  3295 => 1306,  3288 => 1305,  3286 => 1304,  3283 => 1303,  3278 => 1300,  3272 => 1298,  3270 => 1297,  3261 => 1292,  3251 => 1290,  3241 => 1288,  3239 => 1287,  3233 => 1283,  3225 => 1280,  3218 => 1278,  3216 => 1277,  3211 => 1276,  3194 => 1275,  3186 => 1273,  3178 => 1271,  3176 => 1270,  3172 => 1268,  3168 => 1267,  3164 => 1266,  3158 => 1263,  3151 => 1262,  3149 => 1261,  3146 => 1260,  3141 => 1257,  3135 => 1255,  3133 => 1254,  3124 => 1249,  3114 => 1247,  3104 => 1245,  3102 => 1244,  3096 => 1240,  3088 => 1237,  3081 => 1235,  3079 => 1234,  3074 => 1233,  3057 => 1232,  3049 => 1230,  3041 => 1228,  3039 => 1227,  3035 => 1225,  3031 => 1224,  3027 => 1223,  3021 => 1220,  3014 => 1219,  3012 => 1218,  3009 => 1217,  3004 => 1214,  2998 => 1212,  2996 => 1211,  2987 => 1206,  2977 => 1204,  2967 => 1202,  2965 => 1201,  2959 => 1197,  2953 => 1196,  2949 => 1194,  2942 => 1193,  2940 => 1192,  2933 => 1191,  2929 => 1189,  2922 => 1188,  2920 => 1187,  2913 => 1186,  2910 => 1185,  2906 => 1184,  2902 => 1183,  2896 => 1182,  2890 => 1179,  2883 => 1178,  2881 => 1177,  2877 => 1176,  2874 => 1175,  2870 => 1174,  2867 => 1173,  2858 => 1167,  2854 => 1166,  2849 => 1164,  2844 => 1162,  2840 => 1160,  2834 => 1159,  2832 => 1158,  2829 => 1157,  2824 => 1154,  2821 => 1153,  2810 => 1151,  2805 => 1150,  2803 => 1149,  2799 => 1148,  2790 => 1144,  2784 => 1140,  2778 => 1139,  2776 => 1138,  2763 => 1136,  2749 => 1135,  2744 => 1134,  2730 => 1133,  2725 => 1132,  2711 => 1131,  2706 => 1130,  2697 => 1129,  2691 => 1127,  2685 => 1125,  2683 => 1124,  2673 => 1123,  2659 => 1122,  2655 => 1121,  2650 => 1120,  2646 => 1119,  2642 => 1118,  2635 => 1114,  2631 => 1113,  2627 => 1112,  2623 => 1111,  2619 => 1110,  2615 => 1109,  2609 => 1105,  2606 => 1104,  2589 => 1096,  2581 => 1093,  2578 => 1092,  2575 => 1091,  2558 => 1083,  2550 => 1080,  2547 => 1079,  2544 => 1078,  2527 => 1070,  2519 => 1067,  2516 => 1066,  2513 => 1065,  2501 => 1062,  2495 => 1061,  2492 => 1060,  2489 => 1059,  2476 => 1055,  2469 => 1053,  2466 => 1052,  2463 => 1051,  2451 => 1048,  2445 => 1047,  2442 => 1046,  2440 => 1045,  2435 => 1042,  2430 => 1040,  2425 => 1039,  2420 => 1037,  2415 => 1036,  2413 => 1035,  2407 => 1034,  2400 => 1032,  2381 => 1030,  2375 => 1029,  2370 => 1028,  2365 => 1027,  2362 => 1026,  2360 => 1025,  2356 => 1023,  2354 => 1022,  2344 => 1015,  2338 => 1011,  2332 => 1010,  2330 => 1009,  2323 => 1007,  2320 => 1006,  2305 => 1004,  2296 => 1002,  2292 => 1000,  2288 => 999,  2275 => 997,  2270 => 996,  2265 => 995,  2263 => 994,  2257 => 990,  2252 => 987,  2248 => 985,  2244 => 983,  2242 => 982,  2239 => 981,  2237 => 980,  2232 => 978,  2228 => 977,  2215 => 967,  2212 => 966,  2205 => 961,  2201 => 959,  2197 => 957,  2195 => 956,  2190 => 953,  2188 => 952,  2184 => 950,  2172 => 946,  2167 => 945,  2163 => 944,  2156 => 940,  2151 => 938,  2144 => 934,  2141 => 933,  2134 => 928,  2130 => 926,  2126 => 924,  2124 => 923,  2119 => 920,  2117 => 919,  2113 => 917,  2101 => 913,  2096 => 912,  2092 => 911,  2085 => 907,  2080 => 905,  2074 => 901,  2067 => 896,  2063 => 894,  2059 => 892,  2057 => 891,  2052 => 888,  2050 => 887,  2047 => 886,  2040 => 884,  2035 => 882,  2030 => 881,  2025 => 879,  2020 => 878,  2018 => 877,  2015 => 876,  2011 => 875,  2004 => 871,  1997 => 867,  1994 => 866,  1987 => 861,  1983 => 859,  1979 => 857,  1977 => 856,  1972 => 853,  1970 => 852,  1966 => 850,  1954 => 846,  1949 => 845,  1945 => 844,  1938 => 840,  1933 => 838,  1926 => 834,  1923 => 833,  1916 => 828,  1912 => 826,  1908 => 824,  1906 => 823,  1901 => 820,  1899 => 819,  1894 => 816,  1882 => 812,  1877 => 811,  1873 => 810,  1865 => 805,  1860 => 803,  1853 => 799,  1850 => 798,  1843 => 793,  1839 => 791,  1835 => 789,  1833 => 788,  1828 => 785,  1826 => 784,  1818 => 783,  1812 => 780,  1803 => 773,  1796 => 768,  1792 => 766,  1788 => 764,  1786 => 763,  1781 => 760,  1779 => 759,  1773 => 758,  1767 => 755,  1761 => 751,  1754 => 746,  1750 => 744,  1746 => 742,  1744 => 741,  1739 => 738,  1737 => 737,  1734 => 736,  1729 => 734,  1724 => 733,  1719 => 731,  1714 => 730,  1712 => 729,  1705 => 725,  1699 => 721,  1692 => 716,  1688 => 714,  1684 => 712,  1682 => 711,  1677 => 708,  1675 => 707,  1672 => 706,  1666 => 705,  1658 => 703,  1650 => 701,  1647 => 700,  1643 => 699,  1636 => 695,  1630 => 691,  1623 => 686,  1619 => 684,  1615 => 682,  1613 => 681,  1608 => 678,  1606 => 677,  1600 => 676,  1594 => 673,  1588 => 669,  1581 => 664,  1577 => 662,  1573 => 660,  1571 => 659,  1566 => 656,  1564 => 655,  1561 => 654,  1555 => 653,  1547 => 651,  1539 => 649,  1536 => 648,  1532 => 647,  1525 => 643,  1519 => 639,  1512 => 634,  1508 => 632,  1504 => 630,  1502 => 629,  1497 => 626,  1495 => 625,  1488 => 624,  1481 => 619,  1477 => 617,  1473 => 615,  1471 => 614,  1466 => 611,  1464 => 610,  1457 => 609,  1450 => 604,  1446 => 602,  1442 => 600,  1440 => 599,  1435 => 596,  1433 => 595,  1427 => 594,  1421 => 591,  1415 => 587,  1409 => 583,  1405 => 581,  1401 => 579,  1399 => 578,  1395 => 576,  1393 => 575,  1390 => 574,  1385 => 572,  1380 => 571,  1375 => 569,  1370 => 568,  1368 => 567,  1361 => 563,  1356 => 561,  1349 => 556,  1342 => 551,  1338 => 549,  1334 => 547,  1332 => 546,  1327 => 543,  1325 => 542,  1316 => 538,  1310 => 535,  1303 => 531,  1300 => 530,  1293 => 525,  1289 => 523,  1285 => 521,  1283 => 520,  1278 => 517,  1276 => 516,  1273 => 515,  1267 => 514,  1259 => 512,  1251 => 510,  1248 => 509,  1244 => 508,  1237 => 504,  1231 => 500,  1225 => 496,  1221 => 494,  1217 => 492,  1215 => 491,  1211 => 489,  1209 => 488,  1206 => 487,  1201 => 485,  1196 => 484,  1191 => 482,  1186 => 481,  1184 => 480,  1177 => 476,  1170 => 472,  1167 => 471,  1160 => 466,  1156 => 464,  1152 => 462,  1150 => 461,  1145 => 458,  1143 => 457,  1137 => 456,  1131 => 453,  1122 => 449,  1117 => 447,  1112 => 445,  1105 => 440,  1098 => 435,  1094 => 433,  1090 => 431,  1088 => 430,  1083 => 427,  1081 => 426,  1078 => 425,  1072 => 424,  1064 => 422,  1056 => 420,  1053 => 419,  1049 => 418,  1045 => 417,  1038 => 413,  1032 => 409,  1025 => 404,  1021 => 402,  1017 => 400,  1015 => 399,  1010 => 396,  1008 => 395,  1002 => 394,  996 => 391,  991 => 389,  984 => 384,  977 => 379,  973 => 377,  969 => 375,  967 => 374,  962 => 371,  960 => 370,  954 => 369,  948 => 366,  941 => 362,  938 => 361,  931 => 356,  927 => 354,  923 => 352,  921 => 351,  916 => 348,  914 => 347,  908 => 346,  902 => 343,  895 => 339,  892 => 338,  885 => 333,  881 => 331,  877 => 329,  875 => 328,  870 => 325,  868 => 324,  862 => 323,  856 => 320,  849 => 316,  846 => 315,  839 => 310,  835 => 308,  831 => 306,  829 => 305,  824 => 302,  822 => 301,  816 => 300,  810 => 297,  803 => 293,  800 => 292,  793 => 287,  789 => 285,  785 => 283,  783 => 282,  778 => 279,  776 => 278,  770 => 277,  764 => 274,  757 => 270,  754 => 269,  747 => 264,  743 => 262,  739 => 260,  737 => 259,  732 => 256,  730 => 255,  724 => 254,  718 => 251,  711 => 247,  708 => 246,  701 => 241,  697 => 239,  693 => 237,  691 => 236,  686 => 233,  684 => 232,  678 => 231,  672 => 228,  667 => 225,  661 => 223,  659 => 222,  656 => 221,  649 => 216,  645 => 214,  641 => 212,  639 => 211,  634 => 208,  632 => 207,  626 => 206,  620 => 203,  615 => 201,  610 => 199,  605 => 196,  594 => 191,  591 => 190,  582 => 185,  572 => 183,  562 => 181,  560 => 180,  555 => 177,  553 => 176,  543 => 175,  535 => 172,  529 => 168,  520 => 163,  510 => 161,  500 => 159,  498 => 158,  493 => 155,  491 => 154,  481 => 153,  473 => 150,  467 => 146,  458 => 141,  448 => 139,  438 => 137,  436 => 136,  431 => 133,  429 => 132,  419 => 131,  411 => 128,  406 => 125,  400 => 123,  398 => 122,  395 => 121,  386 => 116,  376 => 114,  366 => 112,  364 => 111,  359 => 108,  357 => 107,  347 => 106,  339 => 103,  333 => 99,  324 => 94,  314 => 92,  304 => 90,  302 => 89,  297 => 86,  295 => 85,  282 => 83,  273 => 79,  268 => 76,  262 => 74,  260 => 73,  257 => 72,  248 => 67,  238 => 65,  228 => 63,  226 => 62,  221 => 59,  219 => 58,  209 => 57,  201 => 54,  195 => 52,  191 => 51,  187 => 49,  170 => 47,  166 => 46,  158 => 41,  154 => 40,  150 => 39,  146 => 38,  142 => 37,  138 => 36,  134 => 35,  130 => 34,  126 => 33,  122 => 32,  118 => 31,  114 => 30,  110 => 28,  104 => 26,  102 => 25,  97 => 23,  94 => 22,  86 => 18,  84 => 17,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/product_form.twig", "");
    }
}
