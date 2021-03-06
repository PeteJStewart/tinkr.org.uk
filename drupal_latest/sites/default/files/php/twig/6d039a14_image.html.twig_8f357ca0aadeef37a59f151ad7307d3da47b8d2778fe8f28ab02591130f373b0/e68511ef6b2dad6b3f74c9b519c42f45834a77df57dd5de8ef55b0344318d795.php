<?php

/* core/themes/stable/templates/field/image.html.twig */
class __TwigTemplate_cfb9221f826379297862ed140bfbe7d930428bbd5d32083010d0fa33c8a5ffdd extends Twig_Template
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
        $__internal_f501f83275f49b5ee8ffd4570d3d60a7ee3d98b4d44f71bc7b2b67f56f897253 = $this->env->getExtension("native_profiler");
        $__internal_f501f83275f49b5ee8ffd4570d3d60a7ee3d98b4d44f71bc7b2b67f56f897253->enter($__internal_f501f83275f49b5ee8ffd4570d3d60a7ee3d98b4d44f71bc7b2b67f56f897253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/field/image.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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
        echo "<img";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo " />
";
        
        $__internal_f501f83275f49b5ee8ffd4570d3d60a7ee3d98b4d44f71bc7b2b67f56f897253->leave($__internal_f501f83275f49b5ee8ffd4570d3d60a7ee3d98b4d44f71bc7b2b67f56f897253_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/field/image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override of an image.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the img tag.*/
/*  * - style_name: (optional) The name of the image style applied.*/
/*  **/
/*  * @see template_preprocess_image()*/
/*  *//* */
/* #}*/
/* <img{{ attributes }} />*/
/* */
