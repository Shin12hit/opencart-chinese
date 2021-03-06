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

/* default/template/product/thumb.twig */
class __TwigTemplate_0d8a0f0d86cd8887da9ffd6cb8f076aa5f70381f0cf933dff046c9df4ecfe5e0 extends Template
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
        echo "<div class=\"product-thumb transition\">
  <div class=\"image\"><a href=\"";
        // line 2
        echo ($context["href"] ?? null);
        echo "\"><img src=\"";
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"";
        echo ($context["name"] ?? null);
        echo "\" title=\"";
        echo ($context["name"] ?? null);
        echo "\" class=\"img-fluid\"/></a></div>
  <div class=\"caption\">
    <h4><a href=\"";
        // line 4
        echo ($context["href"] ?? null);
        echo "\">";
        echo ($context["name"] ?? null);
        echo "</a></h4>
    <p>";
        // line 5
        echo ($context["description"] ?? null);
        echo "</p>
    ";
        // line 6
        if (($context["price"] ?? null)) {
            // line 7
            echo "      <div class=\"price\">
        ";
            // line 8
            if ( !($context["special"] ?? null)) {
                // line 9
                echo "          ";
                echo ($context["price"] ?? null);
                echo "
        ";
            } else {
                // line 11
                echo "          <span class=\"price-new\">";
                echo ($context["special"] ?? null);
                echo "</span> <span class=\"price-old\">";
                echo ($context["price"] ?? null);
                echo "</span>
        ";
            }
            // line 13
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "tax", [], "any", false, false, false, 13)) {
                // line 14
                echo "          <span class=\"price-tax\">";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</span>
        ";
            }
            // line 16
            echo "      </div>
    ";
        }
        // line 18
        echo "    ";
        if ((($context["review_status"] ?? null) && ($context["rating"] ?? null))) {
            // line 19
            echo "      <div class=\"rating\">
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 21
                echo "          ";
                if ((-1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "rating", [], "any", false, false, false, 21), $context["i"]))) {
                    // line 22
                    echo "            <span class=\"fas fa-stack\"><i class=\"fas fa-star-o fa-stack-2x\"></i></span>
          ";
                } else {
                    // line 24
                    echo "            <span class=\"fas fa-stack\"><i class=\"fas fa-star fa-stack-2x\"></i><i class=\"fas fa-star-o fa-stack-2x\"></i></span>
          ";
                }
                // line 26
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "      </div>
    ";
        }
        // line 29
        echo "  </div>
  <div class=\"button-group\">
    <button type=\"button\" onclick=\"cart.add('";
        // line 31
        echo ($context["product_id"] ?? null);
        echo "', '";
        echo ($context["minimum"] ?? null);
        echo "');\"><i class=\"fas fa-shopping-cart\"></i> <span class=\"d-none d-lg-inline\">";
        echo ($context["button_cart"] ?? null);
        echo "</span></button>
    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 32
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fas fa-heart\"></i></button>
    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 33
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fas fa-exchange-alt\"></i></button>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/product/thumb.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 33,  140 => 32,  132 => 31,  128 => 29,  124 => 27,  118 => 26,  114 => 24,  110 => 22,  107 => 21,  103 => 20,  100 => 19,  97 => 18,  93 => 16,  85 => 14,  82 => 13,  74 => 11,  68 => 9,  66 => 8,  63 => 7,  61 => 6,  57 => 5,  51 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/thumb.twig", "");
    }
}
