<?php

class __Mustache_e10f426ebcd1a6ff62209f64ade5fd05 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        if ($parent = $this->mustache->loadPartial('core_message/message_drawer_view_overview_section')) {
            $context->pushBlockContext(array(
                'region' => array($this, 'block0c83240d17276ef449a0f70a9941867a'),
                'title' => array($this, 'blockBbb9a223039435a4adf57543ea341a74'),
                'placeholder' => array($this, 'blockF2ca03fecb95f213685459140a6ae494'),
                'emptymessage' => array($this, 'block3d530cf1622cf61475db9526bc26af97'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function sectionF7558f374c4ffa9cd2c6759ea660f7e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' favourites ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' favourites ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section916501edc8941102f320cc739ac0bc50(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nofavourites, core_message ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' nofavourites, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block0c83240d17276ef449a0f70a9941867a($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'view-overview-favourites';
    
        return $buffer;
    }

    public function blockBbb9a223039435a4adf57543ea341a74($context)
    {
        $indent = $buffer = '';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionF7558f374c4ffa9cd2c6759ea660f7e8($context, $indent, $value);
    
        return $buffer;
    }

    public function blockF2ca03fecb95f213685459140a6ae494($context)
    {
        $indent = $buffer = '';
        $buffer .= '        <div class="text-center py-2">';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</div>
';
    
        return $buffer;
    }

    public function block3d530cf1622cf61475db9526bc26af97($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <p class="text-muted mt-2">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section916501edc8941102f320cc739ac0bc50($context, $indent, $value);
        $buffer .= '</p>
';
    
        return $buffer;
    }
}
