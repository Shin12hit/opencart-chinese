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

/* setting/setting.twig */
class __TwigTemplate_95055374ac1e622e52fc28ee411ff1c8eacaa869f6e12c2b62bb4588224a9fe2 extends Template
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
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i></button>
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
  <div class=\"container-fluid\">";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 21
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 22
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 26
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 27
        echo ($context["text_edit"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 29
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-toggle=\"tab\" class=\"nav-link active\">";
        // line 31
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-store\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 32
        echo ($context["tab_store"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-local\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 33
        echo ($context["tab_local"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 34
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 35
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-mail\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 36
        echo ($context["tab_mail"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-server\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 37
        echo ($context["tab_server"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <div class=\"form-group row required\">
                <label for=\"input-meta-title\" class=\"col-sm-2 col-form-label\">";
        // line 42
        echo ($context["entry_meta_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 44
        echo ($context["config_meta_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meta_title"] ?? null);
        echo "\" id=\"input-meta-title\" class=\"form-control\"/>
                  ";
        // line 45
        if (($context["error_meta_title"] ?? null)) {
            // line 46
            echo "                    <div class=\"invalid-tooltip\">";
            echo ($context["error_meta_title"] ?? null);
            echo "</div>
                  ";
        }
        // line 47
        echo "</div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-meta-description\" class=\"col-sm-2 col-form-label\">";
        // line 50
        echo ($context["entry_meta_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 52
        echo ($context["entry_meta_description"] ?? null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo ($context["config_meta_description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-meta-keyword\" class=\"col-sm-2 col-form-label\">";
        // line 56
        echo ($context["entry_meta_keyword"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 58
        echo ($context["entry_meta_keyword"] ?? null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo ($context["config_meta_keyword"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-theme\" class=\"col-sm-2 col-form-label\">";
        // line 62
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">
                    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 66
            echo "                      ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 66), ($context["config_theme"] ?? null)))) {
                // line 67
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 67);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 67);
                echo "</option>
                      ";
            } else {
                // line 69
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 69);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 69);
                echo "</option>
                      ";
            }
            // line 71
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                  </select>
                  <br/>
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\"/></div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-layout\" class=\"col-sm-2 col-form-label\">";
        // line 77
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">
                    ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 81
            echo "                      ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 81), ($context["config_layout_id"] ?? null)))) {
                // line 82
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 82);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 82);
                echo "</option>
                      ";
            } else {
                // line 84
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 84);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 84);
                echo "</option>
                      ";
            }
            // line 86
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                  </select>
                </div>
              </div>
            </div>
            <div id=\"tab-store\" class=\"tab-pane\">
              <div class=\"form-group row required\">
                <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 93
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 95
        echo ($context["config_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
                  ";
        // line 96
        if (($context["error_name"] ?? null)) {
            // line 97
            echo "                    <div class=\"invalid-tooltip\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                  ";
        }
        // line 98
        echo "</div>
              </div>
              <div class=\"form-group row required\">
                <label for=\"input-owner\" class=\"col-sm-2 col-form-label\">";
        // line 101
        echo ($context["entry_owner"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 103
        echo ($context["config_owner"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_owner"] ?? null);
        echo "\" id=\"input-owner\" class=\"form-control\"/>
                  ";
        // line 104
        if (($context["error_owner"] ?? null)) {
            // line 105
            echo "                    <div class=\"invalid-tooltip\">";
            echo ($context["error_owner"] ?? null);
            echo "</div>
                  ";
        }
        // line 106
        echo "</div>
              </div>
              <div class=\"form-group row required\">
                <label for=\"input-address\" class=\"col-sm-2 col-form-label\">";
        // line 109
        echo ($context["entry_address"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"";
        // line 111
        echo ($context["entry_address"] ?? null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo ($context["config_address"] ?? null);
        echo "</textarea>
                  ";
        // line 112
        if (($context["error_address"] ?? null)) {
            // line 113
            echo "                    <div class=\"invalid-tooltip\">";
            echo ($context["error_address"] ?? null);
            echo "</div>
                  ";
        }
        // line 114
        echo "</div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-geocode\" class=\"col-sm-2 col-form-label\">";
        // line 117
        echo ($context["entry_geocode"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 119
        echo ($context["config_geocode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_geocode"] ?? null);
        echo "\" id=\"input-geocode\" class=\"form-control\"/>
                  <small class=\"form-text text-muted\">";
        // line 120
        echo ($context["help_geocode"] ?? null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row required\">
                <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 124
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 126
        echo ($context["config_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                  ";
        // line 127
        if (($context["error_email"] ?? null)) {
            // line 128
            echo "                    <div class=\"invalid-tooltip\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                  ";
        }
        // line 129
        echo "</div>
              </div>
              <div class=\"form-group row required\">
                <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
        // line 132
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 134
        echo ($context["config_telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                  ";
        // line 135
        if (($context["error_telephone"] ?? null)) {
            // line 136
            echo "                    <div class=\"invalid-tooltip\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                  ";
        }
        // line 137
        echo "</div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-fax\" class=\"col-sm-2 col-form-label\">";
        // line 140
        echo ($context["entry_fax"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 142
        echo ($context["config_fax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_fax"] ?? null);
        echo "\" id=\"input-fax\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-image\" class=\"col-sm-2 col-form-label\">";
        // line 146
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"card image\">
                    <img src=\"";
        // line 149
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"config_image\" value=\"";
        echo ($context["config_image"] ?? null);
        echo "\" id=\"input-image\"/>
                    <div class=\"card-body\">
                      <button type=\"button\" data-toggle=\"image\" data-target=\"#input-image\" data-thumb=\"#thumb-image\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 151
        echo ($context["button_edit"] ?? null);
        echo "</button>
                      <button type=\"button\" data-toggle=\"clear\" data-target=\"#input-image\" data-thumb=\"#thumb-image\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i> ";
        // line 152
        echo ($context["button_clear"] ?? null);
        echo "</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-open\" class=\"col-sm-2 col-form-label\">";
        // line 158
        echo ($context["entry_open"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 160
        echo ($context["entry_open"] ?? null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo ($context["config_open"] ?? null);
        echo "</textarea>
                  <small class=\"form-text text-muted\">";
        // line 161
        echo ($context["help_open"] ?? null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-comment\" class=\"col-sm-2 col-form-label\">";
        // line 165
        echo ($context["entry_comment"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 167
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["config_comment"] ?? null);
        echo "</textarea>
                  <small class=\"form-text text-muted\">";
        // line 168
        echo ($context["help_comment"] ?? null);
        echo "</small>
                </div>
              </div>
              ";
        // line 171
        if (($context["locations"] ?? null)) {
            // line 172
            echo "                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
            // line 173
            echo ($context["entry_location"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
            // line 176
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 177
                echo "                        <label class=\"form-check\">
                          ";
                // line 178
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 178), ($context["config_location"] ?? null))) {
                    // line 179
                    echo "                            <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 179);
                    echo "\" checked=\"checked\" class=\"form-check-input\"/>
                            ";
                    // line 180
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 180);
                    echo "
                          ";
                } else {
                    // line 182
                    echo "                            <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 182);
                    echo "\" class=\"form-check-input\"/>
                            ";
                    // line 183
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 183);
                    echo "
                          ";
                }
                // line 185
                echo "                        </label>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "                    </div>
                    <small class=\"form-text text-muted\">";
            // line 188
            echo ($context["help_location"] ?? null);
            echo "</small>
                  </div>
                </div>
              ";
        }
        // line 192
        echo "            </div>
            <div id=\"tab-local\" class=\"tab-pane\">
              <div class=\"form-group row\">
                <label for=\"input-country\" class=\"col-sm-2 col-form-label\">";
        // line 195
        echo ($context["entry_country"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">
                    ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 199
            echo "                      ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 199), ($context["config_country_id"] ?? null)))) {
                // line 200
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 200);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 200);
                echo "</option>
                      ";
            } else {
                // line 202
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 202);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 202);
                echo "</option>
                      ";
            }
            // line 204
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-zone\" class=\"col-sm-2 col-form-label\">";
        // line 209
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\"> </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-timezone\" class=\"col-sm-2 col-form-label\">";
        // line 215
        echo ($context["entry_timezone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-control\">
                    ";
        // line 218
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 219
            echo "                      ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 219), ($context["config_timezone"] ?? null)))) {
                // line 220
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 220);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 220);
                echo "</option>
                      ";
            } else {
                // line 222
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 222);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 222);
                echo "</option>
                      ";
            }
            // line 224
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-language\" class=\"col-sm-2 col-form-label\">";
        // line 229
        echo ($context["entry_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">
                    ";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 233
            echo "                      ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 233), ($context["config_language"] ?? null)))) {
                // line 234
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 234);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 234);
                echo "</option>
                      ";
            } else {
                // line 236
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 236);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 236);
                echo "</option>
                      ";
            }
            // line 238
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-admin-language\" class=\"col-sm-2 col-form-label\">";
        // line 243
        echo ($context["entry_admin_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">
                    ";
        // line 246
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 247
            echo "                      ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 247), ($context["config_admin_language"] ?? null)))) {
                // line 248
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 248);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 248);
                echo "</option>
                      ";
            } else {
                // line 250
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 250);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 250);
                echo "</option>
                      ";
            }
            // line 252
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-currency\" class=\"col-sm-2 col-form-label\">";
        // line 257
        echo ($context["entry_currency"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">
                    ";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 261
            echo "                      ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 261), ($context["config_currency"] ?? null)))) {
                // line 262
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 262);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 262);
                echo "</option>
                      ";
            } else {
                // line 264
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 264);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 264);
                echo "</option>
                      ";
            }
            // line 266
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        echo "                  </select>
                  <small class=\"form-text text-muted\">";
        // line 268
        echo ($context["help_currency"] ?? null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-currency-engine\" class=\"col-sm-2 col-form-label\">";
        // line 272
        echo ($context["entry_currency_engine"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-control\">
                    ";
        // line 275
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currency_engines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency_engine"]) {
            // line 276
            echo "                      ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 276), ($context["config_currency_engine"] ?? null)))) {
                // line 277
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 277);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 277);
                echo "</option>
                      ";
            } else {
                // line 279
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 279);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 279);
                echo "</option>
                      ";
            }
            // line 281
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency_engine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 282
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 286
        echo ($context["entry_currency_auto"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                    ";
        // line 289
        if (($context["config_currency_auto"] ?? null)) {
            // line 290
            echo "                      <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                      <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_currency_auto\" value=\"0\"/> ";
            // line 291
            echo ($context["text_no"] ?? null);
            echo "</label>
                    ";
        } else {
            // line 293
            echo "                      <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_currency_auto\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                      <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\"/> ";
            // line 294
            echo ($context["text_no"] ?? null);
            echo "</label>
                    ";
        }
        // line 296
        echo "                  </div>
                  <small class=\"form-text text-muted\">";
        // line 297
        echo ($context["help_currency_auto"] ?? null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">";
        // line 301
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">
                    ";
        // line 304
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 305
            echo "                      ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 305), ($context["config_length_class_id"] ?? null)))) {
                // line 306
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 306);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 306);
                echo "</option>
                      ";
            } else {
                // line 308
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 308);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 308);
                echo "</option>
                      ";
            }
            // line 310
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 311
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">";
        // line 315
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                    ";
        // line 318
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 319
            echo "                      ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 319), ($context["config_weight_class_id"] ?? null)))) {
                // line 320
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 320);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 320);
                echo "</option>
                      ";
            } else {
                // line 322
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 322);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 322);
                echo "</option>
                      ";
            }
            // line 324
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 325
        echo "                  </select>
                </div>
              </div>
            </div>
            <div id=\"tab-option\" class=\"tab-pane\">

              <fieldset>
                <legend><a href=\"#collapse-product\" data-toggle=\"collapse\">";
        // line 332
        echo ($context["text_product"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-product\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 335
        echo ($context["entry_product_count"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 338
        if (($context["config_product_count"] ?? null)) {
            // line 339
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_product_count\" value=\"0\"/> ";
            // line 340
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 342
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_product_count\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\"/> ";
            // line 343
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 345
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 346
        echo ($context["help_product_count"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row required\">
                    <label for=\"input-admin-limit\" class=\"col-sm-2 col-form-label\">";
        // line 350
        echo ($context["entry_limit_admin"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_pagination\" value=\"";
        // line 352
        echo ($context["config_pagination"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit_admin"] ?? null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\"/>
                      ";
        // line 353
        if (($context["error_limit_admin"] ?? null)) {
            // line 354
            echo "                        <div class=\"invalid-tooltip\">";
            echo ($context["error_limit_admin"] ?? null);
            echo "</div>
                      ";
        }
        // line 356
        echo "                      <small class=\"form-text text-muted\">";
        echo ($context["help_limit_admin"] ?? null);
        echo "</small>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-review\" data-toggle=\"collapse\">";
        // line 363
        echo ($context["text_review"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-review\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 366
        echo ($context["entry_review_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 369
        if (($context["config_review_status"] ?? null)) {
            // line 370
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_review_status\" value=\"0\"/> ";
            // line 371
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 373
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_review_status\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\"/> ";
            // line 374
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 376
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 377
        echo ($context["help_review"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 381
        echo ($context["entry_review_guest"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 384
        if (($context["config_review_guest"] ?? null)) {
            // line 385
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_review_guest\" value=\"0\"/> ";
            // line 386
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 388
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_review_guest\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\"/> ";
            // line 389
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 391
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 392
        echo ($context["help_review_guest"] ?? null);
        echo "</small>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-voucher\" data-toggle=\"collapse\">";
        // line 399
        echo ($context["text_voucher"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-voucher\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row required\">
                    <label for=\"input-voucher-min\" class=\"col-sm-2 col-form-label\">";
        // line 402
        echo ($context["entry_voucher_min"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 404
        echo ($context["config_voucher_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_min"] ?? null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\"/>
                      ";
        // line 405
        if (($context["error_voucher_min"] ?? null)) {
            // line 406
            echo "                        <div class=\"invalid-tooltip\">";
            echo ($context["error_voucher_min"] ?? null);
            echo "</div>
                      ";
        }
        // line 408
        echo "                      <small class=\"form-text text-muted\">";
        echo ($context["help_voucher_min"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row required\">
                    <label for=\"input-voucher-max\" class=\"col-sm-2 col-form-label\">";
        // line 412
        echo ($context["entry_voucher_max"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 414
        echo ($context["config_voucher_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_max"] ?? null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\"/>
                      ";
        // line 415
        if (($context["error_voucher_max"] ?? null)) {
            // line 416
            echo "                        <div class=\"invalid-tooltip\">";
            echo ($context["error_voucher_max"] ?? null);
            echo "</div>
                      ";
        }
        // line 418
        echo "                      <small class=\"form-text text-muted\">";
        echo ($context["help_voucher_max"] ?? null);
        echo "</small>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-legal\" data-toggle=\"collapse\">";
        // line 425
        echo ($context["text_legal"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-legal\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label for=\"input-cookie\" class=\"col-sm-2 col-form-label\">";
        // line 428
        echo ($context["entry_cookie"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_cookie_id\" id=\"input-cookie\" class=\"form-control\">
                        <option value=\"0\">";
        // line 431
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 432
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 433
            echo "                          ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 433), ($context["config_cookie_id"] ?? null)))) {
                // line 434
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 434);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 434);
                echo "</option>
                          ";
            } else {
                // line 436
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 436);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 436);
                echo "</option>
                          ";
            }
            // line 438
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 439
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 440
        echo ($context["help_cookie"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-gdpr\" class=\"col-sm-2 col-form-label\">";
        // line 444
        echo ($context["entry_gdpr"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_gdpr_id\" id=\"input-gdpr\" class=\"form-control\">
                        <option value=\"0\">";
        // line 447
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 448
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 449
            echo "                          ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 449), ($context["config_gdpr_id"] ?? null)))) {
                // line 450
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 450);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 450);
                echo "</option>
                          ";
            } else {
                // line 452
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 452);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 452);
                echo "</option>
                          ";
            }
            // line 454
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 455
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 456
        echo ($context["help_gdpr"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-gdpr-limit\" class=\"col-sm-2 col-form-label\">";
        // line 460
        echo ($context["entry_gdpr_limit"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_gdpr_limit\" value=\"";
        // line 462
        echo ($context["config_gdpr_limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_gdpr_limit"] ?? null);
        echo "\" id=\"input-gdpr-limit\" class=\"form-control\"/>
                      <small class=\"form-text text-muted\">";
        // line 463
        echo ($context["help_gdpr_limit"] ?? null);
        echo "</small>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-tax\" data-toggle=\"collapse\">";
        // line 470
        echo ($context["text_tax"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-tax\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 473
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 476
        if (($context["config_tax"] ?? null)) {
            // line 477
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_tax\" value=\"0\"/> ";
            // line 478
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 480
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_tax\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\"/> ";
            // line 481
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 483
        echo "                      </div>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-tax-default\" class=\"col-sm-2 col-form-label\">";
        // line 487
        echo ($context["entry_tax_default"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                        <option value=\"\">";
        // line 490
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 491
        if ((0 === twig_compare(($context["config_tax_default"] ?? null), "shipping"))) {
            // line 492
            echo "                          <option value=\"shipping\" selected=\"selected\">";
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                        ";
        } else {
            // line 494
            echo "                          <option value=\"shipping\">";
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                        ";
        }
        // line 496
        echo "                        ";
        if ((0 === twig_compare(($context["config_tax_default"] ?? null), "payment"))) {
            // line 497
            echo "                          <option value=\"payment\" selected=\"selected\">";
            echo ($context["text_payment"] ?? null);
            echo "</option>
                        ";
        } else {
            // line 499
            echo "                          <option value=\"payment\">";
            echo ($context["text_payment"] ?? null);
            echo "</option>
                        ";
        }
        // line 501
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 502
        echo ($context["help_tax_default"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-tax-customer\" class=\"col-sm-2 col-form-label\">";
        // line 506
        echo ($context["entry_tax_customer"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                        <option value=\"\">";
        // line 509
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 510
        if ((0 === twig_compare(($context["config_tax_customer"] ?? null), "shipping"))) {
            // line 511
            echo "                          <option value=\"shipping\" selected=\"selected\">";
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                        ";
        } else {
            // line 513
            echo "                          <option value=\"shipping\">";
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                        ";
        }
        // line 515
        echo "                        ";
        if ((0 === twig_compare(($context["config_tax_customer"] ?? null), "payment"))) {
            // line 516
            echo "                          <option value=\"payment\" selected=\"selected\">";
            echo ($context["text_payment"] ?? null);
            echo "</option>
                        ";
        } else {
            // line 518
            echo "                          <option value=\"payment\">";
            echo ($context["text_payment"] ?? null);
            echo "</option>
                        ";
        }
        // line 520
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 521
        echo ($context["help_tax_customer"] ?? null);
        echo "</small>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-account\" data-toggle=\"collapse\">";
        // line 528
        echo ($context["text_account"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-account\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 531
        echo ($context["entry_customer_online"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 534
        if (($context["config_customer_online"] ?? null)) {
            // line 535
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_online\" value=\"0\"/> ";
            // line 536
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 538
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_online\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\"/> ";
            // line 539
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 541
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 542
        echo ($context["help_customer_online"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 546
        echo ($context["entry_customer_activity"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 549
        if (($context["config_customer_activity"] ?? null)) {
            // line 550
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_activity\" value=\"0\"/> ";
            // line 551
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 553
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_activity\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\"/> ";
            // line 554
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 556
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 557
        echo ($context["help_customer_activity"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 561
        echo ($context["entry_customer_search"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 564
        if (($context["config_customer_search"] ?? null)) {
            // line 565
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_search\" value=\"0\"/> ";
            // line 566
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 568
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_search\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\"/> ";
            // line 569
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 571
        echo "                      </div>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-customer-group\" class=\"col-sm-2 col-form-label\">";
        // line 575
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                        ";
        // line 578
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 579
            echo "                          ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 579), ($context["config_customer_group_id"] ?? null)))) {
                // line 580
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 580);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 580);
                echo "</option>
                          ";
            } else {
                // line 582
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 582);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 582);
                echo "</option>
                          ";
            }
            // line 584
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 585
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 586
        echo ($context["help_customer_group"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 590
        echo ($context["entry_customer_group_display"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                        ";
        // line 593
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 594
            echo "                          <label class=\"form-check\">";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 594), ($context["config_customer_group_display"] ?? null))) {
                // line 595
                echo "                              <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 595);
                echo "\" checked=\"checked\" class=\"form-check-input\"/>
                              ";
                // line 596
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 596);
                echo "
                            ";
            } else {
                // line 598
                echo "                              <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 598);
                echo "\" class=\"form-check-input\"/>
                              ";
                // line 599
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 599);
                echo "
                            ";
            }
            // line 600
            echo "</label>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 602
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 603
        echo ($context["help_customer_group_display"] ?? null);
        echo "</small>
                      ";
        // line 604
        if (($context["error_customer_group_display"] ?? null)) {
            // line 605
            echo "                        <div class=\"invalid-tooltip\">";
            echo ($context["error_customer_group_display"] ?? null);
            echo "</div>
                      ";
        }
        // line 606
        echo "</div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 609
        echo ($context["entry_customer_price"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 612
        if (($context["config_customer_price"] ?? null)) {
            // line 613
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_price\" value=\"0\"/> ";
            // line 614
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 616
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_price\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\"/> ";
            // line 617
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 619
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 620
        echo ($context["help_customer_price"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-login-attempts\" class=\"col-sm-2 col-form-label\">";
        // line 624
        echo ($context["entry_login_attempts"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 626
        echo ($context["config_login_attempts"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_login_attempts"] ?? null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\"/>
                      <small class=\"form-text text-muted\">";
        // line 627
        echo ($context["help_login_attempts"] ?? null);
        echo "</small>
                      ";
        // line 628
        if (($context["error_login_attempts"] ?? null)) {
            // line 629
            echo "                        <div class=\"invalid-tooltip\">";
            echo ($context["error_login_attempts"] ?? null);
            echo "</div>
                      ";
        }
        // line 630
        echo "</div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-account\" class=\"col-sm-2 col-form-label\">";
        // line 633
        echo ($context["entry_account"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                        <option value=\"0\">";
        // line 636
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 637
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 638
            echo "                          ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 638), ($context["config_account_id"] ?? null)))) {
                // line 639
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 639);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 639);
                echo "</option>
                          ";
            } else {
                // line 641
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 641);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 641);
                echo "</option>
                          ";
            }
            // line 643
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 644
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 645
        echo ($context["help_account"] ?? null);
        echo "</small>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-checkout\" data-toggle=\"collapse\">";
        // line 652
        echo ($context["text_checkout"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-checkout\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label for=\"input-invoice-prefix\" class=\"col-sm-2 col-form-label\">";
        // line 655
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 657
        echo ($context["config_invoice_prefix"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\"/>
                      <small class=\"form-text text-muted\">";
        // line 658
        echo ($context["help_invoice_prefix"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 662
        echo ($context["entry_cart_weight"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 665
        if (($context["config_cart_weight"] ?? null)) {
            // line 666
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_cart_weight\" value=\"0\"/> ";
            // line 667
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 669
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_cart_weight\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\"/> ";
            // line 670
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 672
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 673
        echo ($context["help_cart_weight"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 677
        echo ($context["entry_checkout_guest"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 680
        if (($context["config_checkout_guest"] ?? null)) {
            // line 681
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_checkout_guest\" value=\"0\"/> ";
            // line 682
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 684
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_checkout_guest\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\"/> ";
            // line 685
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 687
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 688
        echo ($context["help_checkout_guest"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-checkout\" class=\"col-sm-2 col-form-label\">";
        // line 692
        echo ($context["entry_checkout"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                        <option value=\"0\">";
        // line 695
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 696
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 697
            echo "                          ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 697), ($context["config_checkout_id"] ?? null)))) {
                // line 698
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 698);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 698);
                echo "</option>
                          ";
            } else {
                // line 700
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 700);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 700);
                echo "</option>
                          ";
            }
            // line 702
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 703
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 704
        echo ($context["help_checkout"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">";
        // line 708
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                        ";
        // line 711
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 712
            echo "                          ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 712), ($context["config_order_status_id"] ?? null)))) {
                // line 713
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 713);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 713);
                echo "</option>
                          ";
            } else {
                // line 715
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 715);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 715);
                echo "</option>
                          ";
            }
            // line 717
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 718
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 719
        echo ($context["help_order_status"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-process-status\" class=\"col-sm-2 col-form-label\">";
        // line 723
        echo ($context["entry_processing_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                        ";
        // line 726
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 727
            echo "                          <label class=\"form-check\">";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 727), ($context["config_processing_status"] ?? null))) {
                // line 728
                echo "                              <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 728);
                echo "\" checked=\"checked\" class=\"form-check-input\"/>
                              ";
                // line 729
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 729);
                echo "
                            ";
            } else {
                // line 731
                echo "                              <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 731);
                echo "\" class=\"form-check-input\"/>
                              ";
                // line 732
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 732);
                echo "
                            ";
            }
            // line 734
            echo "                          </label>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 736
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 737
        echo ($context["help_processing_status"] ?? null);
        echo "</small>
                      ";
        // line 738
        if (($context["error_processing_status"] ?? null)) {
            // line 739
            echo "                        <div class=\"invalid-tooltip\">";
            echo ($context["error_processing_status"] ?? null);
            echo "</div>
                      ";
        }
        // line 741
        echo "                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-complete-status\" class=\"col-sm-2 col-form-label\">";
        // line 744
        echo ($context["entry_complete_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                        ";
        // line 747
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 748
            echo "                          <label class=\"form-check\">
                            ";
            // line 749
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 749), ($context["config_complete_status"] ?? null))) {
                // line 750
                echo "                              <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 750);
                echo "\" checked=\"checked\" class=\"form-check-input\"/>
                              ";
                // line 751
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 751);
                echo "
                            ";
            } else {
                // line 753
                echo "                              <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 753);
                echo "\" class=\"form-check-input\"/>
                              ";
                // line 754
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 754);
                echo "
                            ";
            }
            // line 756
            echo "                          </label>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 758
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 759
        echo ($context["help_complete_status"] ?? null);
        echo "</small>
                      ";
        // line 760
        if (($context["error_complete_status"] ?? null)) {
            // line 761
            echo "                        <div class=\"invalid-tooltip\">";
            echo ($context["error_complete_status"] ?? null);
            echo "</div>
                      ";
        }
        // line 762
        echo "</div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-fraud-status\" class=\"col-sm-2 col-form-label\">";
        // line 765
        echo ($context["entry_fraud_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">
                        ";
        // line 768
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 769
            echo "                          ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 769), ($context["config_fraud_status_id"] ?? null)))) {
                // line 770
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 770);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 770);
                echo "</option>
                          ";
            } else {
                // line 772
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 772);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 772);
                echo "</option>
                          ";
            }
            // line 774
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 775
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 776
        echo ($context["help_fraud_status"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-api\" class=\"col-sm-2 col-form-label\">";
        // line 780
        echo ($context["entry_api"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                        <option value=\"0\">";
        // line 783
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 784
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 785
            echo "                          ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 785), ($context["config_api_id"] ?? null)))) {
                // line 786
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 786);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 786);
                echo "</option>
                          ";
            } else {
                // line 788
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 788);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 788);
                echo "</option>
                          ";
            }
            // line 790
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 791
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 792
        echo ($context["help_api"] ?? null);
        echo "</small>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-stock\" data-toggle=\"collapse\">";
        // line 799
        echo ($context["text_stock"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-stock\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 802
        echo ($context["entry_stock_display"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 805
        if (($context["config_stock_display"] ?? null)) {
            // line 806
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_stock_display\" value=\"0\"/> ";
            // line 807
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 809
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_stock_display\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\"/> ";
            // line 810
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 812
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 813
        echo ($context["help_stock_display"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 817
        echo ($context["entry_stock_warning"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 820
        if (($context["config_stock_warning"] ?? null)) {
            // line 821
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_stock_warning\" value=\"0\"/> ";
            // line 822
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 824
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_stock_warning\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\"/> ";
            // line 825
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 827
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 828
        echo ($context["help_stock_warning"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 832
        echo ($context["entry_stock_checkout"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 835
        if (($context["config_stock_checkout"] ?? null)) {
            // line 836
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_stock_checkout\" value=\"0\"/> ";
            // line 837
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 839
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_stock_checkout\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\"/> ";
            // line 840
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 842
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 843
        echo ($context["help_stock_checkout"] ?? null);
        echo "</small>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-affiliate\" data-toggle=\"collapse\">";
        // line 850
        echo ($context["text_affiliate"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-affiliate\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 853
        echo ($context["entry_affiliate_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 856
        if (($context["config_affiliate_status"] ?? null)) {
            // line 857
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_affiliate_status\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_affiliate_status\" value=\"0\"/> ";
            // line 858
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 860
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_affiliate_status\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_affiliate_status\" value=\"0\" checked=\"checked\"/> ";
            // line 861
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 863
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 864
        echo ($context["help_affiliate_status"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-affiliate-group\" class=\"col-sm-2 col-form-label\">";
        // line 868
        echo ($context["entry_affiliate_group"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">
                        ";
        // line 871
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 872
            echo "                          ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 872), ($context["config_affiliate_group_id"] ?? null)))) {
                // line 873
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 873);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 873);
                echo "</option>
                          ";
            } else {
                // line 875
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 875);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 875);
                echo "</option>
                          ";
            }
            // line 877
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 878
        echo "                      </select>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 882
        echo ($context["entry_affiliate_approval"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 885
        if (($context["config_affiliate_approval"] ?? null)) {
            // line 886
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\"/> ";
            // line 887
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 889
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\"/> ";
            // line 890
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 892
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 893
        echo ($context["help_affiliate_approval"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 897
        echo ($context["entry_affiliate_auto"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 900
        if (($context["config_affiliate_auto"] ?? null)) {
            // line 901
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\"/> ";
            // line 902
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 904
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\"/> ";
            // line 905
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 907
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 908
        echo ($context["help_affiliate_auto"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-affiliate-commission\" class=\"col-sm-2 col-form-label\">";
        // line 912
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 914
        echo ($context["config_affiliate_commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\"/>
                      <small class=\"form-text text-muted\">";
        // line 915
        echo ($context["help_affiliate_commission"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-affiliate\" class=\"col-sm-2 col-form-label\">";
        // line 919
        echo ($context["entry_affiliate"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                        <option value=\"0\">";
        // line 922
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 923
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 924
            echo "                          ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 924), ($context["config_affiliate_id"] ?? null)))) {
                // line 925
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 925);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 925);
                echo "</option>
                          ";
            } else {
                // line 927
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 927);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 927);
                echo "</option>
                          ";
            }
            // line 929
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 930
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 931
        echo ($context["help_affiliate"] ?? null);
        echo "</small>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-return\" data-toggle=\"collapse\">";
        // line 938
        echo ($context["text_return"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-return\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label for=\"input-return\" class=\"col-sm-2 col-form-label\">";
        // line 941
        echo ($context["entry_return"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                        <option value=\"0\">";
        // line 944
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 945
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 946
            echo "                          ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 946), ($context["config_return_id"] ?? null)))) {
                // line 947
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 947);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 947);
                echo "</option>
                          ";
            } else {
                // line 949
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 949);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 949);
                echo "</option>
                          ";
            }
            // line 951
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 952
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 953
        echo ($context["help_return"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-return-status\" class=\"col-sm-2 col-form-label\">";
        // line 957
        echo ($context["entry_return_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">
                        ";
        // line 960
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 961
            echo "                          ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 961), ($context["config_return_status_id"] ?? null)))) {
                // line 962
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 962);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 962);
                echo "</option>
                          ";
            } else {
                // line 964
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 964);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 964);
                echo "</option>
                          ";
            }
            // line 966
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 967
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 968
        echo ($context["help_return_status"] ?? null);
        echo "</small>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-captcha\" data-toggle=\"collapse\">";
        // line 975
        echo ($context["text_captcha"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-captcha\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label for=\"input-captcha\" class=\"col-sm-2 col-form-label\">";
        // line 978
        echo ($context["entry_captcha"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                        <option value=\"\">";
        // line 981
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 982
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 983
            echo "                          ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 983), ($context["config_captcha"] ?? null)))) {
                // line 984
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 984);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 984);
                echo "</option>
                          ";
            } else {
                // line 986
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 986);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 986);
                echo "</option>
                          ";
            }
            // line 988
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 989
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 990
        echo ($context["help_captcha"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 994
        echo ($context["entry_captcha_page"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                        ";
        // line 997
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 998
            echo "                          <label class=\"form-check\">
                            ";
            // line 999
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 999), ($context["config_captcha_page"] ?? null))) {
                // line 1000
                echo "                              <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1000);
                echo "\" checked=\"checked\" class=\"form-check-input\"/>
                              ";
                // line 1001
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1001);
                echo "
                            ";
            } else {
                // line 1003
                echo "                              <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1003);
                echo "\" class=\"form-check-input\"/>
                              ";
                // line 1004
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1004);
                echo "
                            ";
            }
            // line 1006
            echo "                          </label>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1008
        echo "                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>

            </div>

            <div id=\"tab-image\" class=\"tab-pane\">
              <div class=\"form-group row\">
                <label for=\"input-logo\" class=\"col-sm-2 col-form-label\">";
        // line 1018
        echo ($context["entry_logo"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"card image\">
                    <img src=\"";
        // line 1021
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-logo\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"config_logo\" value=\"";
        echo ($context["config_logo"] ?? null);
        echo "\" id=\"input-logo\"/>
                    <div class=\"card-body\">
                      <button type=\"button\" data-toggle=\"image\" data-target=\"#input-logo\" data-thumb=\"#thumb-logo\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 1023
        echo ($context["button_edit"] ?? null);
        echo "</button>
                      <button type=\"button\" data-toggle=\"clear\" data-target=\"#input-logo\" data-thumb=\"#thumb-logo\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i> ";
        // line 1024
        echo ($context["button_clear"] ?? null);
        echo "</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-icon\" class=\"col-sm-2 col-form-label\">";
        // line 1030
        echo ($context["entry_icon"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"card image\">
                    <img src=\"";
        // line 1033
        echo ($context["icon"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-icon\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"config_icon\" value=\"";
        echo ($context["config_icon"] ?? null);
        echo "\" id=\"input-icon\"/>
                    <div class=\"card-body\">
                      <button type=\"button\" data-toggle=\"image\" data-target=\"#input-icon\" data-thumb=\"#thumb-icon\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 1035
        echo ($context["button_edit"] ?? null);
        echo "</button>
                      <button type=\"button\" data-toggle=\"clear\" data-target=\"#input-icon\" data-thumb=\"#thumb-icon\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i> ";
        // line 1036
        echo ($context["button_clear"] ?? null);
        echo "</button>
                    </div>
                  </div>
                  <small class=\"form-text text-muted\">";
        // line 1039
        echo ($context["help_icon"] ?? null);
        echo "</small>
                </div>
              </div>
            </div>

            <div id=\"tab-mail\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1046
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label for=\"input-mail-engine\" class=\"col-sm-2 col-form-label\">";
        // line 1048
        echo ($context["entry_mail_engine"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">
                      ";
        // line 1051
        if ((0 === twig_compare(($context["config_mail_engine"] ?? null), "mail"))) {
            // line 1052
            echo "                        <option value=\"mail\" selected=\"selected\">";
            echo ($context["text_mail"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 1054
            echo "                        <option value=\"mail\">";
            echo ($context["text_mail"] ?? null);
            echo "</option>
                      ";
        }
        // line 1056
        echo "                      ";
        if ((0 === twig_compare(($context["config_mail_engine"] ?? null), "smtp"))) {
            // line 1057
            echo "                        <option value=\"smtp\" selected=\"selected\">";
            echo ($context["text_smtp"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 1059
            echo "                        <option value=\"smtp\">";
            echo ($context["text_smtp"] ?? null);
            echo "</option>
                      ";
        }
        // line 1061
        echo "                    </select>
                    <small class=\"form-text text-muted\">";
        // line 1062
        echo ($context["help_mail_engine"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-mail-parameter\" class=\"col-sm-2 col-form-label\">";
        // line 1066
        echo ($context["entry_mail_parameter"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1068
        echo ($context["config_mail_parameter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 1069
        echo ($context["help_mail_parameter"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-mail-smtp-hostname\" class=\"col-sm-2 col-form-label\">";
        // line 1073
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1075
        echo ($context["config_mail_smtp_hostname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 1076
        echo ($context["help_mail_smtp_hostname"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-mail-smtp-username\" class=\"col-sm-2 col-form-label\">";
        // line 1080
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1082
        echo ($context["config_mail_smtp_username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-mail-smtp-password\" class=\"col-sm-2 col-form-label\">";
        // line 1086
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1088
        echo ($context["config_mail_smtp_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 1089
        echo ($context["help_mail_smtp_password"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-mail-smtp-port\" class=\"col-sm-2 col-form-label\">";
        // line 1093
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1095
        echo ($context["config_mail_smtp_port"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-mail-smtp-timeout\" class=\"col-sm-2 col-form-label\">";
        // line 1099
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1101
        echo ($context["config_mail_smtp_timeout"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1106
        echo ($context["text_mail_alert"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1108
        echo ($context["entry_mail_alert"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 1111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1112
            echo "                        <label class=\"form-check\">
                          ";
            // line 1113
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1113), ($context["config_mail_alert"] ?? null))) {
                // line 1114
                echo "                            <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1114);
                echo "\" checked=\"checked\" class=\"form-check-input\"/>
                            ";
                // line 1115
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1115);
                echo "
                          ";
            } else {
                // line 1117
                echo "                            <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1117);
                echo "\" class=\"form-check-input\"/>
                            ";
                // line 1118
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1118);
                echo "
                          ";
            }
            // line 1120
            echo "                        </label>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1122
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 1123
        echo ($context["help_mail_alert"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-mail-alert-email\" class=\"col-sm-2 col-form-label\">";
        // line 1127
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1129
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo ($context["config_mail_alert_email"] ?? null);
        echo "</textarea>
                    <small class=\"form-text text-muted\">";
        // line 1130
        echo ($context["help_mail_alert_email"] ?? null);
        echo "</small>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-server\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1137
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1139
        echo ($context["entry_maintenance"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 1142
        if (($context["config_maintenance"] ?? null)) {
            // line 1143
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_maintenance\" value=\"0\"/> ";
            // line 1144
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 1146
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_maintenance\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\"/> ";
            // line 1147
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 1149
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 1150
        echo ($context["help_maintenance"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1154
        echo ($context["entry_seo_url"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 1157
        if (($context["config_seo_url"] ?? null)) {
            // line 1158
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_seo_url\" value=\"0\"/> ";
            // line 1159
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 1161
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_seo_url\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\"/> ";
            // line 1162
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 1164
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 1165
        echo ($context["help_seo_url"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-robots\" class=\"col-sm-2 col-form-label\">";
        // line 1169
        echo ($context["entry_robots"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1171
        echo ($context["entry_robots"] ?? null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo ($context["config_robots"] ?? null);
        echo "</textarea>
                    <small class=\"form-text text-muted\">";
        // line 1172
        echo ($context["help_robots"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-compression\" class=\"col-sm-2 col-form-label\">";
        // line 1176
        echo ($context["entry_compression"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1178
        echo ($context["config_compression"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_compression"] ?? null);
        echo "\" id=\"input-compression\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 1179
        echo ($context["help_compression"] ?? null);
        echo "</small>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1184
        echo ($context["text_security"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1186
        echo ($context["entry_password"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 1189
        if (($context["config_password"] ?? null)) {
            // line 1190
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_password\" value=\"0\"/> ";
            // line 1191
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 1193
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_password\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\"/> ";
            // line 1194
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 1196
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 1197
        echo ($context["help_password"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1201
        echo ($context["entry_shared"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 1204
        if (($context["config_shared"] ?? null)) {
            // line 1205
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_shared\" value=\"0\"/> ";
            // line 1206
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 1208
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_shared\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\"/> ";
            // line 1209
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 1211
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 1212
        echo ($context["help_shared"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-encryption\" class=\"col-sm-2 col-form-label\">";
        // line 1216
        echo ($context["entry_encryption"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1218
        echo ($context["entry_encryption"] ?? null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo ($context["config_encryption"] ?? null);
        echo "</textarea>
                    <small class=\"form-text text-muted\">";
        // line 1219
        echo ($context["help_encryption"] ?? null);
        echo "</small>
                    ";
        // line 1220
        if (($context["error_encryption"] ?? null)) {
            // line 1221
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_encryption"] ?? null);
            echo "</div>
                    ";
        }
        // line 1222
        echo "</div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1226
        echo ($context["text_upload"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label for=\"input-file-max-size\" class=\"col-sm-2 col-form-label\">";
        // line 1228
        echo ($context["entry_file_max_size"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1230
        echo ($context["config_file_max_size"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_file_max_size"] ?? null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 1231
        echo ($context["help_file_max_size"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-file-ext-allowed\" class=\"col-sm-2 col-form-label\">";
        // line 1235
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1237
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo ($context["config_file_ext_allowed"] ?? null);
        echo "</textarea>
                    <small class=\"form-text text-muted\">";
        // line 1238
        echo ($context["help_file_ext_allowed"] ?? null);
        echo "</small>
                    ";
        // line 1239
        if (($context["error_extension"] ?? null)) {
            // line 1240
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_extension"] ?? null);
            echo "</div>
                    ";
        }
        // line 1242
        echo "                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-file-mime-allowed\" class=\"col-sm-2 col-form-label\">";
        // line 1245
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1247
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo ($context["config_file_mime_allowed"] ?? null);
        echo "</textarea>
                    <small class=\"form-text text-muted\">";
        // line 1248
        echo ($context["help_file_mime_allowed"] ?? null);
        echo "</small>
                    ";
        // line 1249
        if (($context["error_mime"] ?? null)) {
            // line 1250
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_mime"] ?? null);
            echo "</div>
                    ";
        }
        // line 1252
        echo "                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1256
        echo ($context["text_error"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1258
        echo ($context["entry_error_display"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 1261
        if (($context["config_error_display"] ?? null)) {
            // line 1262
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_error_display\" value=\"0\"/> ";
            // line 1263
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 1265
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_error_display\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\"/> ";
            // line 1266
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 1268
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1272
        echo ($context["entry_error_log"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 1275
        if (($context["config_error_log"] ?? null)) {
            // line 1276
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_error_log\" value=\"0\"/> ";
            // line 1277
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 1279
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_error_log\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\"/> ";
            // line 1280
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 1282
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row required\">
                  <label for=\"input-error-filename\" class=\"col-sm-2 col-form-label\">";
        // line 1286
        echo ($context["entry_error_filename"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1288
        echo ($context["config_error_filename"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_error_filename"] ?? null);
        echo "\" id=\"input-error-filename\" class=\"form-control\"/>
                    ";
        // line 1289
        if (($context["error_log"] ?? null)) {
            // line 1290
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_log"] ?? null);
            echo "</div>
                    ";
        }
        // line 1291
        echo "</div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token=";
        // line 1304
        echo ($context["user_token"] ?? null);
        echo "&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script>
<script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1326
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 1335
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1341
        echo ($context["config_zone_id"] ?? null);
        echo "') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1348
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);

\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script>
";
        // line 1363
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3526 => 1363,  3508 => 1348,  3498 => 1341,  3489 => 1335,  3477 => 1326,  3452 => 1304,  3437 => 1291,  3431 => 1290,  3429 => 1289,  3423 => 1288,  3418 => 1286,  3412 => 1282,  3407 => 1280,  3402 => 1279,  3397 => 1277,  3392 => 1276,  3390 => 1275,  3384 => 1272,  3378 => 1268,  3373 => 1266,  3368 => 1265,  3363 => 1263,  3358 => 1262,  3356 => 1261,  3350 => 1258,  3345 => 1256,  3339 => 1252,  3333 => 1250,  3331 => 1249,  3327 => 1248,  3321 => 1247,  3316 => 1245,  3311 => 1242,  3305 => 1240,  3303 => 1239,  3299 => 1238,  3293 => 1237,  3288 => 1235,  3281 => 1231,  3275 => 1230,  3270 => 1228,  3265 => 1226,  3259 => 1222,  3253 => 1221,  3251 => 1220,  3247 => 1219,  3241 => 1218,  3236 => 1216,  3229 => 1212,  3226 => 1211,  3221 => 1209,  3216 => 1208,  3211 => 1206,  3206 => 1205,  3204 => 1204,  3198 => 1201,  3191 => 1197,  3188 => 1196,  3183 => 1194,  3178 => 1193,  3173 => 1191,  3168 => 1190,  3166 => 1189,  3160 => 1186,  3155 => 1184,  3147 => 1179,  3141 => 1178,  3136 => 1176,  3129 => 1172,  3123 => 1171,  3118 => 1169,  3111 => 1165,  3108 => 1164,  3103 => 1162,  3098 => 1161,  3093 => 1159,  3088 => 1158,  3086 => 1157,  3080 => 1154,  3073 => 1150,  3070 => 1149,  3065 => 1147,  3060 => 1146,  3055 => 1144,  3050 => 1143,  3048 => 1142,  3042 => 1139,  3037 => 1137,  3027 => 1130,  3021 => 1129,  3016 => 1127,  3009 => 1123,  3006 => 1122,  2999 => 1120,  2994 => 1118,  2989 => 1117,  2984 => 1115,  2979 => 1114,  2977 => 1113,  2974 => 1112,  2970 => 1111,  2964 => 1108,  2959 => 1106,  2949 => 1101,  2944 => 1099,  2935 => 1095,  2930 => 1093,  2923 => 1089,  2917 => 1088,  2912 => 1086,  2903 => 1082,  2898 => 1080,  2891 => 1076,  2885 => 1075,  2880 => 1073,  2873 => 1069,  2867 => 1068,  2862 => 1066,  2855 => 1062,  2852 => 1061,  2846 => 1059,  2840 => 1057,  2837 => 1056,  2831 => 1054,  2825 => 1052,  2823 => 1051,  2817 => 1048,  2812 => 1046,  2802 => 1039,  2796 => 1036,  2792 => 1035,  2783 => 1033,  2777 => 1030,  2768 => 1024,  2764 => 1023,  2755 => 1021,  2749 => 1018,  2737 => 1008,  2730 => 1006,  2725 => 1004,  2720 => 1003,  2715 => 1001,  2710 => 1000,  2708 => 999,  2705 => 998,  2701 => 997,  2695 => 994,  2688 => 990,  2685 => 989,  2679 => 988,  2671 => 986,  2663 => 984,  2660 => 983,  2656 => 982,  2652 => 981,  2646 => 978,  2640 => 975,  2630 => 968,  2627 => 967,  2621 => 966,  2613 => 964,  2605 => 962,  2602 => 961,  2598 => 960,  2592 => 957,  2585 => 953,  2582 => 952,  2576 => 951,  2568 => 949,  2560 => 947,  2557 => 946,  2553 => 945,  2549 => 944,  2543 => 941,  2537 => 938,  2527 => 931,  2524 => 930,  2518 => 929,  2510 => 927,  2502 => 925,  2499 => 924,  2495 => 923,  2491 => 922,  2485 => 919,  2478 => 915,  2472 => 914,  2467 => 912,  2460 => 908,  2457 => 907,  2452 => 905,  2447 => 904,  2442 => 902,  2437 => 901,  2435 => 900,  2429 => 897,  2422 => 893,  2419 => 892,  2414 => 890,  2409 => 889,  2404 => 887,  2399 => 886,  2397 => 885,  2391 => 882,  2385 => 878,  2379 => 877,  2371 => 875,  2363 => 873,  2360 => 872,  2356 => 871,  2350 => 868,  2343 => 864,  2340 => 863,  2335 => 861,  2330 => 860,  2325 => 858,  2320 => 857,  2318 => 856,  2312 => 853,  2306 => 850,  2296 => 843,  2293 => 842,  2288 => 840,  2283 => 839,  2278 => 837,  2273 => 836,  2271 => 835,  2265 => 832,  2258 => 828,  2255 => 827,  2250 => 825,  2245 => 824,  2240 => 822,  2235 => 821,  2233 => 820,  2227 => 817,  2220 => 813,  2217 => 812,  2212 => 810,  2207 => 809,  2202 => 807,  2197 => 806,  2195 => 805,  2189 => 802,  2183 => 799,  2173 => 792,  2170 => 791,  2164 => 790,  2156 => 788,  2148 => 786,  2145 => 785,  2141 => 784,  2137 => 783,  2131 => 780,  2124 => 776,  2121 => 775,  2115 => 774,  2107 => 772,  2099 => 770,  2096 => 769,  2092 => 768,  2086 => 765,  2081 => 762,  2075 => 761,  2073 => 760,  2069 => 759,  2066 => 758,  2059 => 756,  2054 => 754,  2049 => 753,  2044 => 751,  2039 => 750,  2037 => 749,  2034 => 748,  2030 => 747,  2024 => 744,  2019 => 741,  2013 => 739,  2011 => 738,  2007 => 737,  2004 => 736,  1997 => 734,  1992 => 732,  1987 => 731,  1982 => 729,  1977 => 728,  1974 => 727,  1970 => 726,  1964 => 723,  1957 => 719,  1954 => 718,  1948 => 717,  1940 => 715,  1932 => 713,  1929 => 712,  1925 => 711,  1919 => 708,  1912 => 704,  1909 => 703,  1903 => 702,  1895 => 700,  1887 => 698,  1884 => 697,  1880 => 696,  1876 => 695,  1870 => 692,  1863 => 688,  1860 => 687,  1855 => 685,  1850 => 684,  1845 => 682,  1840 => 681,  1838 => 680,  1832 => 677,  1825 => 673,  1822 => 672,  1817 => 670,  1812 => 669,  1807 => 667,  1802 => 666,  1800 => 665,  1794 => 662,  1787 => 658,  1781 => 657,  1776 => 655,  1770 => 652,  1760 => 645,  1757 => 644,  1751 => 643,  1743 => 641,  1735 => 639,  1732 => 638,  1728 => 637,  1724 => 636,  1718 => 633,  1713 => 630,  1707 => 629,  1705 => 628,  1701 => 627,  1695 => 626,  1690 => 624,  1683 => 620,  1680 => 619,  1675 => 617,  1670 => 616,  1665 => 614,  1660 => 613,  1658 => 612,  1652 => 609,  1647 => 606,  1641 => 605,  1639 => 604,  1635 => 603,  1632 => 602,  1625 => 600,  1620 => 599,  1615 => 598,  1610 => 596,  1605 => 595,  1602 => 594,  1598 => 593,  1592 => 590,  1585 => 586,  1582 => 585,  1576 => 584,  1568 => 582,  1560 => 580,  1557 => 579,  1553 => 578,  1547 => 575,  1541 => 571,  1536 => 569,  1531 => 568,  1526 => 566,  1521 => 565,  1519 => 564,  1513 => 561,  1506 => 557,  1503 => 556,  1498 => 554,  1493 => 553,  1488 => 551,  1483 => 550,  1481 => 549,  1475 => 546,  1468 => 542,  1465 => 541,  1460 => 539,  1455 => 538,  1450 => 536,  1445 => 535,  1443 => 534,  1437 => 531,  1431 => 528,  1421 => 521,  1418 => 520,  1412 => 518,  1406 => 516,  1403 => 515,  1397 => 513,  1391 => 511,  1389 => 510,  1385 => 509,  1379 => 506,  1372 => 502,  1369 => 501,  1363 => 499,  1357 => 497,  1354 => 496,  1348 => 494,  1342 => 492,  1340 => 491,  1336 => 490,  1330 => 487,  1324 => 483,  1319 => 481,  1314 => 480,  1309 => 478,  1304 => 477,  1302 => 476,  1296 => 473,  1290 => 470,  1280 => 463,  1274 => 462,  1269 => 460,  1262 => 456,  1259 => 455,  1253 => 454,  1245 => 452,  1237 => 450,  1234 => 449,  1230 => 448,  1226 => 447,  1220 => 444,  1213 => 440,  1210 => 439,  1204 => 438,  1196 => 436,  1188 => 434,  1185 => 433,  1181 => 432,  1177 => 431,  1171 => 428,  1165 => 425,  1154 => 418,  1148 => 416,  1146 => 415,  1140 => 414,  1135 => 412,  1127 => 408,  1121 => 406,  1119 => 405,  1113 => 404,  1108 => 402,  1102 => 399,  1092 => 392,  1089 => 391,  1084 => 389,  1079 => 388,  1074 => 386,  1069 => 385,  1067 => 384,  1061 => 381,  1054 => 377,  1051 => 376,  1046 => 374,  1041 => 373,  1036 => 371,  1031 => 370,  1029 => 369,  1023 => 366,  1017 => 363,  1006 => 356,  1000 => 354,  998 => 353,  992 => 352,  987 => 350,  980 => 346,  977 => 345,  972 => 343,  967 => 342,  962 => 340,  957 => 339,  955 => 338,  949 => 335,  943 => 332,  934 => 325,  928 => 324,  920 => 322,  912 => 320,  909 => 319,  905 => 318,  899 => 315,  893 => 311,  887 => 310,  879 => 308,  871 => 306,  868 => 305,  864 => 304,  858 => 301,  851 => 297,  848 => 296,  843 => 294,  838 => 293,  833 => 291,  828 => 290,  826 => 289,  820 => 286,  814 => 282,  808 => 281,  800 => 279,  792 => 277,  789 => 276,  785 => 275,  779 => 272,  772 => 268,  769 => 267,  763 => 266,  755 => 264,  747 => 262,  744 => 261,  740 => 260,  734 => 257,  728 => 253,  722 => 252,  714 => 250,  706 => 248,  703 => 247,  699 => 246,  693 => 243,  687 => 239,  681 => 238,  673 => 236,  665 => 234,  662 => 233,  658 => 232,  652 => 229,  646 => 225,  640 => 224,  632 => 222,  624 => 220,  621 => 219,  617 => 218,  611 => 215,  602 => 209,  596 => 205,  590 => 204,  582 => 202,  574 => 200,  571 => 199,  567 => 198,  561 => 195,  556 => 192,  549 => 188,  546 => 187,  539 => 185,  534 => 183,  529 => 182,  524 => 180,  519 => 179,  517 => 178,  514 => 177,  510 => 176,  504 => 173,  501 => 172,  499 => 171,  493 => 168,  487 => 167,  482 => 165,  475 => 161,  469 => 160,  464 => 158,  455 => 152,  451 => 151,  442 => 149,  436 => 146,  427 => 142,  422 => 140,  417 => 137,  411 => 136,  409 => 135,  403 => 134,  398 => 132,  393 => 129,  387 => 128,  385 => 127,  379 => 126,  374 => 124,  367 => 120,  361 => 119,  356 => 117,  351 => 114,  345 => 113,  343 => 112,  337 => 111,  332 => 109,  327 => 106,  321 => 105,  319 => 104,  313 => 103,  308 => 101,  303 => 98,  297 => 97,  295 => 96,  289 => 95,  284 => 93,  276 => 87,  270 => 86,  262 => 84,  254 => 82,  251 => 81,  247 => 80,  241 => 77,  234 => 72,  228 => 71,  220 => 69,  212 => 67,  209 => 66,  205 => 65,  199 => 62,  190 => 58,  185 => 56,  176 => 52,  171 => 50,  166 => 47,  160 => 46,  158 => 45,  152 => 44,  147 => 42,  139 => 37,  135 => 36,  131 => 35,  127 => 34,  123 => 33,  119 => 32,  115 => 31,  110 => 29,  105 => 27,  102 => 26,  94 => 22,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "setting/setting.twig", "");
    }
}
