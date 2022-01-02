<?php

class __Mustache_c15cd11222ab527969c3e1f469cff007 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="loading-placeholder-content" aria-hidden="true">
';
        // 'cards' section
        $value = $context->find('cards');
        $buffer .= $this->section20e0320c2c4a5504294b97710fd02402($context, $indent, $value);
        // 'list' section
        $value = $context->find('list');
        $buffer .= $this->sectionD608c5fddaf44dd459d256bc8bb08f26($context, $indent, $value);
        // 'summary' section
        $value = $context->find('summary');
        $buffer .= $this->section4ecc61235d4dfed7f87de2bddd1b2062($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section20e0320c2c4a5504294b97710fd02402(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="card-deck dashboard-card-deck one-row" style="height: 13rem">
        {{> core_course/placeholder-course }}
        {{> core_course/placeholder-course }}
        {{> core_course/placeholder-course }}
        {{> core_course/placeholder-course }}
    </div>
    ';
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
                
                $buffer .= $indent . '    <div class="card-deck dashboard-card-deck one-row" style="height: 13rem">
';
                if ($partial = $this->mustache->loadPartial('core_course/placeholder-course')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                if ($partial = $this->mustache->loadPartial('core_course/placeholder-course')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                if ($partial = $this->mustache->loadPartial('core_course/placeholder-course')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                if ($partial = $this->mustache->loadPartial('core_course/placeholder-course')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD608c5fddaf44dd459d256bc8bb08f26(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <ul class="list-group">
        <li class="list-group-item course-listitem">
            <div class="col-md-6 p-0 d-flex align-items-center">
                <div class="bg-pulse-grey rounded-circle mr-2" style="height: 1rem; width: 1rem;"></div>
                <div class="bg-pulse-grey w-50" style="height: 1rem; margin: 0.5rem 0"></div>
            </div>
        </li>
        <li class="list-group-item course-listitem">
            <div class="col-md-6 p-0 d-flex align-items-center">
                <div class="bg-pulse-grey rounded-circle mr-2" style="height: 1rem; width: 1rem;"></div>
                <div class="bg-pulse-grey w-50" style="height: 1rem; margin: 0.5rem 0"></div>
            </div>
        </li>
        <li class="list-group-item course-listitem">
            <div class="col-md-6 p-0 d-flex align-items-center">
                <div class="bg-pulse-grey rounded-circle mr-2" style="height: 1rem; width: 1rem;"></div>
                <div class="bg-pulse-grey w-50" style="height: 1rem; margin: 0.5rem 0"></div>
            </div>
        </li>
        <li class="list-group-item course-listitem">
            <div class="col-md-6 p-0 d-flex align-items-center">
                <div class="bg-pulse-grey rounded-circle mr-2" style="height: 1rem; width: 1rem;"></div>
                <div class="bg-pulse-grey w-50" style="height: 1rem; margin: 0.5rem 0"></div>
            </div>
        </li>
    </ul>
    ';
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
                
                $buffer .= $indent . '    <ul class="list-group">
';
                $buffer .= $indent . '        <li class="list-group-item course-listitem">
';
                $buffer .= $indent . '            <div class="col-md-6 p-0 d-flex align-items-center">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey rounded-circle mr-2" style="height: 1rem; width: 1rem;"></div>
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-50" style="height: 1rem; margin: 0.5rem 0"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </li>
';
                $buffer .= $indent . '        <li class="list-group-item course-listitem">
';
                $buffer .= $indent . '            <div class="col-md-6 p-0 d-flex align-items-center">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey rounded-circle mr-2" style="height: 1rem; width: 1rem;"></div>
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-50" style="height: 1rem; margin: 0.5rem 0"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </li>
';
                $buffer .= $indent . '        <li class="list-group-item course-listitem">
';
                $buffer .= $indent . '            <div class="col-md-6 p-0 d-flex align-items-center">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey rounded-circle mr-2" style="height: 1rem; width: 1rem;"></div>
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-50" style="height: 1rem; margin: 0.5rem 0"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </li>
';
                $buffer .= $indent . '        <li class="list-group-item course-listitem">
';
                $buffer .= $indent . '            <div class="col-md-6 p-0 d-flex align-items-center">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey rounded-circle mr-2" style="height: 1rem; width: 1rem;"></div>
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-50" style="height: 1rem; margin: 0.5rem 0"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </li>
';
                $buffer .= $indent . '    </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4ecc61235d4dfed7f87de2bddd1b2062(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="course-summaryitem mb-1 p-2">
        <div class="d-flex">
            <div class="d-flex">
                <div class="bg-pulse-grey rounded-circle m-0 p-0 mr-1" style="height: 7rem; width: 7rem;"></div>
            </div>
            <div class="d-flex w-100 flex-column">
                <div class="bg-pulse-grey w-50 mb-1" style="height: 1rem; margin: 0.5rem 0"></div>
                <div class="bg-pulse-grey w-100" style="height: 13rem"></div>
            </div>
        </div>
    </div>
    ';
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
                
                $buffer .= $indent . '    <div class="course-summaryitem mb-1 p-2">
';
                $buffer .= $indent . '        <div class="d-flex">
';
                $buffer .= $indent . '            <div class="d-flex">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey rounded-circle m-0 p-0 mr-1" style="height: 7rem; width: 7rem;"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="d-flex w-100 flex-column">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-50 mb-1" style="height: 1rem; margin: 0.5rem 0"></div>
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-100" style="height: 13rem"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
