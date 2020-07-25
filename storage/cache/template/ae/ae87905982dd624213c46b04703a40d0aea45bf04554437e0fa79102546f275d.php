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

/* marketplace/marketplace_comment.twig */
class __TwigTemplate_4b75fc2dc1a831e7a280e163432697ff8fe974865b3f1dd759a1201ff66175e2 extends Template
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
        if (($context["comments"] ?? null)) {
            // line 2
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 3
                echo "    <div id=\"comment";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "extension_comment_id", [], "any", false, false, false, 3);
                echo "\" class=\"media\">
      <img src=\"";
                // line 4
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "image", [], "any", false, false, false, 4);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "member", [], "any", false, false, false, 4);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "member", [], "any", false, false, false, 4);
                echo "\" class=\"mr-3 rounded-circle\"/>
      <div class=\"media-body\">
        <h5 class=\"mt-0\">";
                // line 6
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "member", [], "any", false, false, false, 6);
                echo " <span>";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "date_added", [], "any", false, false, false, 6);
                echo "</span></h5>
        <p>";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 7);
                echo "</p>
        <div class=\"reply\">
          <div> ";
                // line 9
                if (twig_get_attribute($this->env, $this->source, $context["comment"], "reply", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["comment"], "reply", [], "any", false, false, false, 10));
                    foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                        // line 11
                        echo "              <div class=\"media\">
                <img src=\"";
                        // line 12
                        echo twig_get_attribute($this->env, $this->source, $context["reply"], "image", [], "any", false, false, false, 12);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["reply"], "member", [], "any", false, false, false, 12);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["reply"], "member", [], "any", false, false, false, 12);
                        echo "\" class=\"mr-3 rounded-circle\"/>
                <div class=\"media-body\">
                  <h5 class=\"mt-0\">";
                        // line 14
                        echo twig_get_attribute($this->env, $this->source, $context["reply"], "member", [], "any", false, false, false, 14);
                        echo " <span>";
                        echo twig_get_attribute($this->env, $this->source, $context["reply"], "date_added", [], "any", false, false, false, 14);
                        echo "</h5>
                  <p>";
                        // line 15
                        echo twig_get_attribute($this->env, $this->source, $context["reply"], "comment", [], "any", false, false, false, 15);
                        echo "</p>
                </div>
              </div>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 19
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, $context["comment"], "next", [], "any", false, false, false, 19)) {
                        // line 20
                        echo "              <div class=\"text-center\"><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["comment"], "next", [], "any", false, false, false, 20);
                        echo "\" class=\"btn btn-block\">see more replies...</a></div>
            ";
                    }
                    // line 22
                    echo "            ";
                }
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "refresh", [], "any", false, false, false, 22);
                echo "\" class=\"reply-refresh hide\">refresh</a></div>
        </div>
        <p class=\"text-right\">
          <button type=\"button\" class=\"btn btn-link btn-xs\">";
                // line 25
                echo ($context["button_reply"] ?? null);
                echo "</button>
        </p>
        <div class=\"reply-input-box\" style=\"display: none;\">
          <div class=\"media\">
            <div class=\"media-body\">
              <div class=\"form-group\">
                <label for=\"input-comment";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "extension_comment_id", [], "any", false, false, false, 31);
                echo "\">Leave your comment</label> <textarea name=\"comment\" placeholder=\"Write your comment here...\" id=\"input-comment";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "extension_comment_id", [], "any", false, false, false, 31);
                echo "\" class=\"form-control\"></textarea>
              </div>
              <div class=\"text-right\"><a href=\"";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "add", [], "any", false, false, false, 33);
                echo "\" class=\"btn btn-primary btn-sm\">Comment</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "  <br/>
  <div class=\"text-center\">";
            // line 42
            echo ($context["pagination"] ?? null);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "marketplace/marketplace_comment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 42,  152 => 41,  138 => 33,  131 => 31,  122 => 25,  113 => 22,  107 => 20,  104 => 19,  94 => 15,  88 => 14,  79 => 12,  76 => 11,  71 => 10,  69 => 9,  64 => 7,  58 => 6,  49 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketplace/marketplace_comment.twig", "");
    }
}
