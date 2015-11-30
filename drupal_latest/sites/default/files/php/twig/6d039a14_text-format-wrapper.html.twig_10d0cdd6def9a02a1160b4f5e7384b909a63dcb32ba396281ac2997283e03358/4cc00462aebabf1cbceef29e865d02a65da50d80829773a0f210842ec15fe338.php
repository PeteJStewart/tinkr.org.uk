<?php

/* core/themes/stable/templates/content-edit/text-format-wrapper.html.twig */
class __TwigTemplate_afdb07a302f5830279f0b315f8946c67d90e284a4d087229b57be87cd29f894c extends Twig_Template
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
        $__internal_0da1cccd6afd42f25fd5b9296b49d99f99758726fd5c0aa56984c5e934ebc8a0 = $this->env->getExtension("native_profiler");
        $__internal_0da1cccd6afd42f25fd5b9296b49d99f99758726fd5c0aa56984c5e934ebc8a0->enter($__internal_0da1cccd6afd42f25fd5b9296b49d99f99758726fd5c0aa56984c5e934ebc8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/content-edit/text-format-wrapper.html.twig"));

        $tags = array("if" => 18);
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

        // line 16
        echo "<div class=\"js-text-format-wrapper js-form-item form-item\">
  ";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
  ";
        // line 18
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 19
            echo "    <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true));
            echo "</div>
  ";
        }
        // line 21
        echo "</div>
";
        
        $__internal_0da1cccd6afd42f25fd5b9296b49d99f99758726fd5c0aa56984c5e934ebc8a0->leave($__internal_0da1cccd6afd42f25fd5b9296b49d99f99758726fd5c0aa56984c5e934ebc8a0_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/content-edit/text-format-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 21,  55 => 19,  53 => 18,  49 => 17,  46 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a text format-enabled form element.*/
/*  **/
/*  * Available variables:*/
/*  * - children: Text format element children.*/
/*  * - description: Text format element description.*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  * - aria_description: Flag for whether or not an ARIA description has been*/
/*  *   added to the description container.*/
/*  **/
/*  * @see template_preprocess_text_format_wrapper()*/
/*  *//* */
/* #}*/
/* <div class="js-text-format-wrapper js-form-item form-item">*/
/*   {{ children }}*/
/*   {% if description %}*/
/*     <div{{ attributes }}>{{ description }}</div>*/
/*   {% endif %}*/
/* </div>*/
/* */
