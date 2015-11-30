<?php

/* core/themes/stable/templates/field/image-formatter.html.twig */
class __TwigTemplate_93f4c4102e46f2aa3a1250c6f0136215edf582576e91bbe377f5be4c9d33d1c4 extends Twig_Template
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
        $__internal_99ba0c8629c21bd6b2468c9d02a727b1604f9b1c6d5711c375e404e3d90be20c = $this->env->getExtension("native_profiler");
        $__internal_99ba0c8629c21bd6b2468c9d02a727b1604f9b1c6d5711c375e404e3d90be20c->enter($__internal_99ba0c8629c21bd6b2468c9d02a727b1604f9b1c6d5711c375e404e3d90be20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/field/image-formatter.html.twig"));

        $tags = array("if" => 14);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 14
        if ((isset($context["url"]) ? $context["url"] : null)) {
            // line 15
            echo "  <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true));
            echo "</a>
";
        } else {
            // line 17
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true));
            echo "
";
        }
        
        $__internal_99ba0c8629c21bd6b2468c9d02a727b1604f9b1c6d5711c375e404e3d90be20c->leave($__internal_99ba0c8629c21bd6b2468c9d02a727b1604f9b1c6d5711c375e404e3d90be20c_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/field/image-formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  48 => 15,  46 => 14,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a formatted image field.*/
/*  **/
/*  * Available variables:*/
/*  * - image: A collection of image data.*/
/*  * - image_style: An optional image style.*/
/*  * - url: An optional URL the image can be linked to.*/
/*  **/
/*  * @see template_preprocess_image_formatter()*/
/*  *//* */
/* #}*/
/* {% if url %}*/
/*   <a href="{{ url }}">{{ image }}</a>*/
/* {% else %}*/
/*   {{ image }}*/
/* {% endif %}*/
/* */
