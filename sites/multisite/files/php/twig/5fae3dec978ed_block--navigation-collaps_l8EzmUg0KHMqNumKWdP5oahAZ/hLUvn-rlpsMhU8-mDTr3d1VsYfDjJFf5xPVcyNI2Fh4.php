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

/* themes/contrib/sshop/templates/block/nav_collapsible/block--navigation-collapsible--sshop-account-menu.html.twig */
class __TwigTemplate_c8a71e7042fcc86b3cdb5aeb1ebe64d09a9266df804c395a1cf6134773955bb7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("set" => 38, "block" => 49);
        $filters = array("t" => 45, "escape" => 48);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['t', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "
";
        // line 38
        $context["classes"] = [0 => "block-content", 1 => "header-dropdown", 2 => "user-menu-header-right"];
        // line 44
        echo "<div class=\"block user-menu-block has-dropdown\">
  <a href=\"#\" title=\"";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("User menu"));
        echo "\">
    <span class=\"shop-icon fa fa-user-circle-o\"></span>
  </a>
  <div";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 48), 48, $this->source), "html", null, true);
        echo ">
    ";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "  </div>
</div>
";
    }

    // line 49
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 50, $this->source), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/sshop/templates/block/nav_collapsible/block--navigation-collapsible--sshop-account-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 50,  89 => 49,  83 => 52,  81 => 49,  77 => 48,  71 => 45,  68 => 44,  66 => 38,  63 => 36,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/sshop/templates/block/nav_collapsible/block--navigation-collapsible--sshop-account-menu.html.twig", "/var/www/html/drupalnine/themes/contrib/sshop/templates/block/nav_collapsible/block--navigation-collapsible--sshop-account-menu.html.twig");
    }
}
