<?php

/* core/themes/classy/templates/form/dropbutton-wrapper.html.twig */
class __TwigTemplate_d7702ecef1225c5782094b2dc96d7d67f85d1c00ba181d4e69c030135629824c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d98a075ac7d2f290f302a7983d404d11acb12ec7bea33dcfb41e760ec1751c60 = $this->env->getExtension("native_profiler");
        $__internal_d98a075ac7d2f290f302a7983d404d11acb12ec7bea33dcfb41e760ec1751c60->enter($__internal_d98a075ac7d2f290f302a7983d404d11acb12ec7bea33dcfb41e760ec1751c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/form/dropbutton-wrapper.html.twig"));

        $tags = array("if" => 13, "spaceless" => 14);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'spaceless'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 13
        if ((isset($context["children"]) ? $context["children"] : null)) {
            // line 14
            echo "  ";
            ob_start();
            // line 15
            echo "    <div class=\"dropbutton-wrapper\">
      <div class=\"dropbutton-widget\">
        ";
            // line 17
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
            echo "
      </div>
    </div>
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        
        $__internal_d98a075ac7d2f290f302a7983d404d11acb12ec7bea33dcfb41e760ec1751c60->leave($__internal_d98a075ac7d2f290f302a7983d404d11acb12ec7bea33dcfb41e760ec1751c60_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/dropbutton-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  51 => 15,  48 => 14,  46 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a dropbutton wrapper.*/
/*  **/
/*  * Available variables:*/
/*  * - children: Contains the child elements of the dropbutton menu.*/
/*  **/
/*  * @see template_preprocess()*/
/*  * @see template_preprocess_dropbutton_wrapper()*/
/*  *//* */
/* #}*/
/* {% if children %}*/
/*   {% spaceless %}*/
/*     <div class="dropbutton-wrapper">*/
/*       <div class="dropbutton-widget">*/
/*         {{ children }}*/
/*       </div>*/
/*     </div>*/
/*   {% endspaceless %}*/
/* {% endif %}*/
/* */
