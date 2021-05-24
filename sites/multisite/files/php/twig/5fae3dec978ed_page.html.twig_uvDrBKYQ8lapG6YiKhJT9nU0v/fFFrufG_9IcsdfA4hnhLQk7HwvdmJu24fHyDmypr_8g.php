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

/* themes/contrib/drupal8_custom_theme/templates/layout/page.html.twig */
class __TwigTemplate_a32842937ed5698b07bd31ebdfc75f6dae2853a37cb9e8609b8f6dd301634c74 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("if" => 74, "for" => 118);
        $filters = array("escape" => 75, "raw" => 119, "date" => 323);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
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
        // line 60
        echo "

<!-- Header and Navbar -->
<header class=\"main-header\">
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"\">
      <div class=\"\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 74)) {
            // line 75
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 77
        echo "      </div>

      <!-- Navigation -->
      <div class=\"\">
        ";
        // line 81
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 81)) {
            // line 82
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 84
        echo "      </div>
      <!--End Navigation -->

      <!-- Navigation -->
      <div class=\"\">
        <!--Search-->
          ";
        // line 90
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 90)) {
            // line 91
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 93
        echo "        <!--End Search-->
      </div>
      <!--End Navigation -->

      </div>
    </div>
  </nav>

  <!-- Banner -->
  ";
        // line 102
        if ((($context["is_front"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 102))) {
            echo "  
    <div class=\"slideshow\">
      ";
            // line 104
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 107
        echo "  <!-- End Banner -->

</header>
<!--End Header & Navbar -->

<div class=\"main-content-wrap\">

  <!-- Start Slider -->
  ";
        // line 115
        if (($context["is_front"] ?? null)) {
            // line 116
            echo "    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 119
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 119, $this->source));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "      </ul>
    </div>
  ";
        }
        // line 124
        echo "  <!-- End Slider -->

  <!--Home page message-->
  ";
        // line 127
        if ((($context["is_front"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "homepagemessage", [], "any", false, false, true, 127))) {
            // line 128
            echo "    <div class=\"container-sub\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 131
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "homepagemessage", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 136
        echo "  <!--End Highlighted-->

  <!-- Page Title -->
  ";
        // line 139
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 139) &&  !($context["is_front"] ?? null))) {
            // line 140
            echo "    <div id=\"page-title\">
      <div id=\"page-title-inner\">
        <!-- start: Container-sub -->
        <div class=\"container-sub\">
          ";
            // line 144
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 149
        echo "  <!-- End Page Title -- >


  <!-- layout -->
  ";
        // line 153
        if ( !($context["is_front"] ?? null)) {
            // line 154
            echo "    <div id=\"wrapper\" class=\"main-container\">

      <!--Highlighted-->
      ";
            // line 157
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 157)) {
                // line 158
                echo "        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
                // line 160
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
                echo "
          </div>
        </div>
      ";
            }
            // line 164
            echo "      <!--End Highlighted-->

      <!-- start: Container-sub -->
      <div class=\"container-sub\">
                
        <!--start:content -->
        ";
            // line 170
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 170)) {
                // line 171
                echo "          <div class=\"breadcrumb-wrap\">
            <div class=\"breadcrumb-subwrap\">";
                // line 172
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 172), 172, $this->source), "html", null, true);
                echo "</div>
          </div>
        ";
            }
            // line 175
            echo "
        <div class=\"row layout\">

          <!--- Start Left SideBar -->
          ";
            // line 179
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 179)) {
                // line 180
                echo "            <div class=\"sidebar\" >
              <div class = ";
                // line 181
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 181, $this->source), "html", null, true);
                echo " >
                ";
                // line 182
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 182), 182, $this->source), "html", null, true);
                echo "
              </div>
            </div>
          ";
            }
            // line 186
            echo "          <!---End Right SideBar -->

          <!--- Start content -->
          ";
            // line 189
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 189) &&  !($context["is_front"] ?? null))) {
                // line 190
                echo "            <div class=\"content_layout\">
              <div class=";
                // line 191
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 191, $this->source), "html", null, true);
                echo ">
                ";
                // line 192
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 192), 192, $this->source), "html", null, true);
                echo "
              </div>
            </div>
          ";
            }
            // line 196
            echo "          <!---End content -->

          <!--- Start Right SideBar -->
          ";
            // line 199
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 199)) {
                // line 200
                echo "            <div class=\"sidebar\">
              <div class=";
                // line 201
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 201, $this->source), "html", null, true);
                echo ">
                ";
                // line 202
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 202), 202, $this->source), "html", null, true);
                echo "
              </div>
            </div>
          ";
            }
            // line 206
            echo "          <!---End Right SideBar -->
          
        </div>
        <!--End Content -->

        <!--Start Content Bottom-->
        ";
            // line 212
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 212)) {
                // line 213
                echo "          <div class=\"row\">
            ";
                // line 214
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 214), 214, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 217
            echo "        <!--End Content Bottom-->

      </div>
    </div>
  ";
        }
        // line 222
        echo "  <!-- End layout -->


  <!-- Start Google Map -->
  ";
        // line 226
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "google_map", [], "any", false, false, true, 226)) {
            // line 227
            echo "    <div class=\"google-map\">
      ";
            // line 228
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "google_map", [], "any", false, false, true, 228), 228, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 231
        echo "  <!-- End Google Map -->


  <!-- Start bottom -->
  ";
        // line 235
        if (($context["is_front"] ?? null)) {
            echo "  
    ";
            // line 236
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 236) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 236)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 236))) {
                // line 237
                echo "      <div class=\"bottom-widgets\">
        <div class=\"container-sub\">        
          <div class=\"row-sub clearfix\">

            <!-- Start Bottom First Region -->          
            ";
                // line 242
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 242)) {
                    // line 243
                    echo "              <div class = ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 243, $this->source), "html", null, true);
                    echo ">
                ";
                    // line 244
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 244), 244, $this->source), "html", null, true);
                    echo "
              </div>
            ";
                }
                // line 246
                echo "          
            <!-- End Bottom First Region -->

            <!-- Start Bottom Second Region -->
            ";
                // line 250
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 250)) {
                    // line 251
                    echo "              <div class = ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 251, $this->source), "html", null, true);
                    echo ">
                ";
                    // line 252
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 252), 252, $this->source), "html", null, true);
                    echo "
              </div>
            ";
                }
                // line 254
                echo "          
            <!-- End Bottom Second Region -->

            <!-- Start Bottom third Region -->          
            ";
                // line 258
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 258)) {
                    // line 259
                    echo "              <div class = ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 259, $this->source), "html", null, true);
                    echo ">
                ";
                    // line 260
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 260), 260, $this->source), "html", null, true);
                    echo "
              </div>
            ";
                }
                // line 262
                echo "          
            <!-- End Bottom Third Region -->

            ";
                // line 265
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 265)) {
                    // line 266
                    echo "            <div class = ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 266, $this->source), "html", null, true);
                    echo ">
              ";
                    // line 267
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 267), 267, $this->source), "html", null, true);
                    echo "
            </div>
            ";
                }
                // line 270
                echo "
          </div>
        </div>
      </div>
    ";
            }
            // line 275
            echo "  ";
        }
        // line 276
        echo "  <!--End Bottom -->


  <!-- Start Footer Menu -->
  ";
        // line 280
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 280)) {
            // line 281
            echo "    <div class=\"footer-menu\">
      <div class=\"container-sub\">
        <div class=\"row-sub clearfix\">
          <div class=\"col-sm-6\">
            ";
            // line 285
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 285), 285, $this->source), "html", null, true);
            echo "
          </div>
          ";
            // line 287
            if (($context["show_social_icon"] ?? null)) {
                // line 288
                echo "          <div class=\"col-sm-6\">
            <div class=\"social-media\">
              ";
                // line 290
                if (($context["facebook_url"] ?? null)) {
                    // line 291
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 291, $this->source), "html", null, true);
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
              ";
                }
                // line 293
                echo "              ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 294
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null), 294, $this->source), "html", null, true);
                    echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
              ";
                }
                // line 296
                echo "              ";
                if (($context["twitter_url"] ?? null)) {
                    // line 297
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 297, $this->source), "html", null, true);
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
              ";
                }
                // line 299
                echo "              ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 300
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 300, $this->source), "html", null, true);
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
              ";
                }
                // line 302
                echo "              ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 303
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 303, $this->source), "html", null, true);
                    echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
              ";
                }
                // line 305
                echo "              ";
                if (($context["rss_url"] ?? null)) {
                    // line 306
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 306, $this->source), "html", null, true);
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
              ";
                }
                // line 308
                echo "            </div>
          </div>
          ";
            }
            // line 311
            echo "        </div>
      </div>
    </div>
  ";
        }
        // line 315
        echo "  <!-- End Footer Menu -->

  <div class=\"copyright\">
    <div class=\"container-sub\">
      <div class=\"row-sub clearfix\">

        <!-- Copyright -->
        <div class=\"col-sm-6\">
          <p class=\"copyright\">Copyright © ";
        // line 323
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved</p>
        </div>
        <!-- End Copyright -->

        <!-- Credit link -->
        ";
        // line 328
        if (($context["show_credit_link"] ?? null)) {
            // line 329
            echo "          <div class=\"col-sm-6\">
            <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
          </div>
        ";
        }
        // line 333
        echo "        <!-- End Credit link -->
        
      </div>
    </div>
  </div>

</div>


";
    }

    public function getTemplateName()
    {
        return "themes/contrib/drupal8_custom_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  578 => 333,  572 => 329,  570 => 328,  562 => 323,  552 => 315,  546 => 311,  541 => 308,  535 => 306,  532 => 305,  526 => 303,  523 => 302,  517 => 300,  514 => 299,  508 => 297,  505 => 296,  499 => 294,  496 => 293,  490 => 291,  488 => 290,  484 => 288,  482 => 287,  477 => 285,  471 => 281,  469 => 280,  463 => 276,  460 => 275,  453 => 270,  447 => 267,  442 => 266,  440 => 265,  435 => 262,  429 => 260,  424 => 259,  422 => 258,  416 => 254,  410 => 252,  405 => 251,  403 => 250,  397 => 246,  391 => 244,  386 => 243,  384 => 242,  377 => 237,  375 => 236,  371 => 235,  365 => 231,  359 => 228,  356 => 227,  354 => 226,  348 => 222,  341 => 217,  335 => 214,  332 => 213,  330 => 212,  322 => 206,  315 => 202,  311 => 201,  308 => 200,  306 => 199,  301 => 196,  294 => 192,  290 => 191,  287 => 190,  285 => 189,  280 => 186,  273 => 182,  269 => 181,  266 => 180,  264 => 179,  258 => 175,  252 => 172,  249 => 171,  247 => 170,  239 => 164,  232 => 160,  228 => 158,  226 => 157,  221 => 154,  219 => 153,  213 => 149,  205 => 144,  199 => 140,  197 => 139,  192 => 136,  184 => 131,  179 => 128,  177 => 127,  172 => 124,  167 => 121,  158 => 119,  154 => 118,  150 => 116,  148 => 115,  138 => 107,  132 => 104,  127 => 102,  116 => 93,  110 => 91,  108 => 90,  100 => 84,  94 => 82,  92 => 81,  86 => 77,  80 => 75,  78 => 74,  62 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/drupal8_custom_theme/templates/layout/page.html.twig", "/var/www/html/drupalnine/themes/contrib/drupal8_custom_theme/templates/layout/page.html.twig");
    }
}
