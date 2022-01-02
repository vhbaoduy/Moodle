<?php

class __Mustache_5acf5b2bd10252cdb444f2c6e3d60807 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div';
        $buffer .= ' class="calendarwrapper"';
        // 'courseid' section
        $value = $context->find('courseid');
        $buffer .= $this->section4f3e547ac50707b30ffc2cec5e028045($context, $indent, $value);
        // 'categoryid' section
        $value = $context->find('categoryid');
        $buffer .= $this->sectionA00eaaaf78214a10bae0a4f10432dae0($context, $indent, $value);
        $buffer .= ' data-context-id="';
        $value = $this->resolveValue($context->find('defaulteventcontext'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
        $buffer .= ' data-month="';
        $value = $this->resolveValue($context->findDot('date.mon'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
        $buffer .= ' data-year="';
        $value = $this->resolveValue($context->findDot('date.year'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
        $buffer .= ' data-view="month"';
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('core_calendar/month_navigation')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        if ($partial = $this->mustache->loadPartial('core/overlay_loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '    <table id="month-detailed-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="calendarmonth calendartable mb-0">
';
        $buffer .= $indent . '        <thead>
';
        $buffer .= $indent . '            <tr>
';
        // 'daynames' section
        $value = $context->find('daynames');
        $buffer .= $this->sectionEcdb23ba18bb8720302a632638c7888c($context, $indent, $value);
        $buffer .= $indent . '            </tr>
';
        $buffer .= $indent . '        </thead>
';
        $buffer .= $indent . '        <tbody>
';
        // 'weeks' section
        $value = $context->find('weeks');
        $buffer .= $this->section16514953764876ee2feeb234563efdfb($context, $indent, $value);
        $buffer .= $indent . '        </tbody>
';
        $buffer .= $indent . '    </table>
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section97d01b713e00bfce873b563637877bf4($context, $indent, $value);

        return $buffer;
    }

    private function section4f3e547ac50707b30ffc2cec5e028045(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' data-courseid="{{courseid}}"';
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
                
                $buffer .= ' data-courseid="';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA00eaaaf78214a10bae0a4f10432dae0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' data-categoryid="{{categoryid}}"';
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
                
                $buffer .= ' data-categoryid="';
                $value = $this->resolveValue($context->find('categoryid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEcdb23ba18bb8720302a632638c7888c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <th class="header text-xs-center">
                    <span class="sr-only">{{fullname}}</span>
                    <span aria-hidden="true">{{shortname}}</span>
                </th>
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
                
                $buffer .= $indent . '                <th class="header text-xs-center">
';
                $buffer .= $indent . '                    <span class="sr-only">';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    <span aria-hidden="true">';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                </th>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC4c3143ddabc3752a981ecbe10c8372e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <td class="dayblank">&nbsp;</td>
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
                
                $buffer .= $indent . '                    <td class="dayblank">&nbsp;</td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCce61e3fee851e8b66112494c048a58a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' today';
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
                
                $buffer .= ' today';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section84f949a8191b4daaac38d5ac1997cd7a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' weekend';
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
                
                $buffer .= ' weekend';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8aa9feca8669cbbfdc6a37548f193ebe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' duration';
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
                
                $buffer .= ' duration';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC090550ce065bf0ee1844d93a2f5c5bc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' duration_{{.}}';
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
                
                $buffer .= ' duration_';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA7cafb8496be54e32a81ab964df17ff2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' clickable';
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
                
                $buffer .= ' clickable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9ace4eaa54de4d56088d9017f4fbda7c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a data-action="view-day-link" href="#" class="aalink day" aria-label="{{viewdaylinktitle}}"
                                    data-year="{{date.year}}" data-month="{{date.mon}}" data-day="{{mday}}"
                                    data-courseid="{{courseid}}" data-categoryid="{{categoryid}}"
                                    data-timestamp="{{timestamp}}">{{mday}}</a>
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
                
                $buffer .= $indent . '                                <a data-action="view-day-link" href="#" class="aalink day" aria-label="';
                $value = $this->resolveValue($context->find('viewdaylinktitle'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                    data-year="';
                $value = $this->resolveValue($context->findDot('date.year'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-month="';
                $value = $this->resolveValue($context->findDot('date.mon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-day="';
                $value = $this->resolveValue($context->find('mday'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                    data-courseid="';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-categoryid="';
                $value = $this->resolveValue($context->find('categoryid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                    data-timestamp="';
                $value = $this->resolveValue($context->find('timestamp'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('mday'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBc782eceb39bac842906d7c17b672625(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <li class="events-underway">[{{{name}}}]</li>
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
                
                $buffer .= $indent . '                                            <li class="events-underway">[';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= $value;
                $buffer .= ']</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0f975c07a7c25acae084a36f7b8341f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                        data-min-day-timestamp="{{.}}"
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
                
                $buffer .= $indent . '                                                        data-min-day-timestamp="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7fe5aeb136f3476ebd4a27b359358ff2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                        data-min-day-error="{{.}}"
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
                
                $buffer .= $indent . '                                                        data-min-day-error="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe3386f0309844d46ef98eac9d45e63c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                        data-max-day-timestamp="{{.}}"
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
                
                $buffer .= $indent . '                                                        data-max-day-timestamp="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4bce327a87e177ea5508b5878013f1f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                        data-max-day-error="{{.}}"
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
                
                $buffer .= $indent . '                                                        data-max-day-error="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC395169ef83f3cdf3d735d4cf04da5f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    draggable="true"
                                                    data-drag-type="move"
                                                    {{#mindaytimestamp}}
                                                        data-min-day-timestamp="{{.}}"
                                                    {{/mindaytimestamp}}
                                                    {{#mindayerror}}
                                                        data-min-day-error="{{.}}"
                                                    {{/mindayerror}}
                                                    {{#maxdaytimestamp}}
                                                        data-max-day-timestamp="{{.}}"
                                                    {{/maxdaytimestamp}}
                                                    {{#maxdayerror}}
                                                        data-max-day-error="{{.}}"
                                                    {{/maxdayerror}}
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
                
                $buffer .= $indent . '                                                    draggable="true"
';
                $buffer .= $indent . '                                                    data-drag-type="move"
';
                // 'mindaytimestamp' section
                $value = $context->find('mindaytimestamp');
                $buffer .= $this->section0f975c07a7c25acae084a36f7b8341f4($context, $indent, $value);
                // 'mindayerror' section
                $value = $context->find('mindayerror');
                $buffer .= $this->section7fe5aeb136f3476ebd4a27b359358ff2($context, $indent, $value);
                // 'maxdaytimestamp' section
                $value = $context->find('maxdaytimestamp');
                $buffer .= $this->sectionBe3386f0309844d46ef98eac9d45e63c($context, $indent, $value);
                // 'maxdayerror' section
                $value = $context->find('maxdayerror');
                $buffer .= $this->section4bce327a87e177ea5508b5878013f1f4($context, $indent, $value);
                $buffer .= $indent . '                                                ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section127c720e2e1fbc82e6e6aac5c023f880(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        {{#underway}}
                                            <li class="events-underway">[{{{name}}}]</li>
                                        {{/underway}}
                                        {{^underway}}
                                            <li data-region="event-item"
                                                data-event-component="{{component}}"
                                                data-event-eventtype="{{eventtype}}"
                                                data-eventtype-{{normalisedeventtype}}="1"
                                                {{#draggable}}
                                                    draggable="true"
                                                    data-drag-type="move"
                                                    {{#mindaytimestamp}}
                                                        data-min-day-timestamp="{{.}}"
                                                    {{/mindaytimestamp}}
                                                    {{#mindayerror}}
                                                        data-min-day-error="{{.}}"
                                                    {{/mindayerror}}
                                                    {{#maxdaytimestamp}}
                                                        data-max-day-timestamp="{{.}}"
                                                    {{/maxdaytimestamp}}
                                                    {{#maxdayerror}}
                                                        data-max-day-error="{{.}}"
                                                    {{/maxdayerror}}
                                                {{/draggable}}>

                                                <a data-action="view-event" data-event-id="{{id}}" href="{{url}}" title="{{name}}">
                                                    <span class="calendar-circle calendar_event_{{normalisedeventtype}}">
                                                        &nbsp;
                                                    </span>
                                                    {{> core_calendar/event_icon}}
                                                    <span class="eventname">{{{name}}}</span>
                                                </a>
                                            </li>
                                        {{/underway}}
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
                
                // 'underway' section
                $value = $context->find('underway');
                $buffer .= $this->sectionBc782eceb39bac842906d7c17b672625($context, $indent, $value);
                // 'underway' inverted section
                $value = $context->find('underway');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                            <li data-region="event-item"
';
                    $buffer .= $indent . '                                                data-event-component="';
                    $value = $this->resolveValue($context->find('component'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                data-event-eventtype="';
                    $value = $this->resolveValue($context->find('eventtype'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                data-eventtype-';
                    $value = $this->resolveValue($context->find('normalisedeventtype'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '="1"
';
                    // 'draggable' section
                    $value = $context->find('draggable');
                    $buffer .= $this->sectionC395169ef83f3cdf3d735d4cf04da5f4($context, $indent, $value);
                    $buffer .= '>
';
                    $buffer .= $indent . '
';
                    $buffer .= $indent . '                                                <a data-action="view-event" data-event-id="';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" href="';
                    $value = $this->resolveValue($context->find('url'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" title="';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '                                                    <span class="calendar-circle calendar_event_';
                    $value = $this->resolveValue($context->find('normalisedeventtype'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '                                                        &nbsp;
';
                    $buffer .= $indent . '                                                    </span>
';
                    if ($partial = $this->mustache->loadPartial('core_calendar/event_icon')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                                                    ');
                    }
                    $buffer .= $indent . '                                                    <span class="eventname">';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= $value;
                    $buffer .= '</span>
';
                    $buffer .= $indent . '                                                </a>
';
                    $buffer .= $indent . '                                            </li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE1f66ed595273201676a16720de23a71(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div data-region="day-content">
                                    <ul>
                                        {{#events}}
                                        {{#underway}}
                                            <li class="events-underway">[{{{name}}}]</li>
                                        {{/underway}}
                                        {{^underway}}
                                            <li data-region="event-item"
                                                data-event-component="{{component}}"
                                                data-event-eventtype="{{eventtype}}"
                                                data-eventtype-{{normalisedeventtype}}="1"
                                                {{#draggable}}
                                                    draggable="true"
                                                    data-drag-type="move"
                                                    {{#mindaytimestamp}}
                                                        data-min-day-timestamp="{{.}}"
                                                    {{/mindaytimestamp}}
                                                    {{#mindayerror}}
                                                        data-min-day-error="{{.}}"
                                                    {{/mindayerror}}
                                                    {{#maxdaytimestamp}}
                                                        data-max-day-timestamp="{{.}}"
                                                    {{/maxdaytimestamp}}
                                                    {{#maxdayerror}}
                                                        data-max-day-error="{{.}}"
                                                    {{/maxdayerror}}
                                                {{/draggable}}>

                                                <a data-action="view-event" data-event-id="{{id}}" href="{{url}}" title="{{name}}">
                                                    <span class="calendar-circle calendar_event_{{normalisedeventtype}}">
                                                        &nbsp;
                                                    </span>
                                                    {{> core_calendar/event_icon}}
                                                    <span class="eventname">{{{name}}}</span>
                                                </a>
                                            </li>
                                        {{/underway}}
                                        {{/events}}
                                    </ul>
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
                
                $buffer .= $indent . '                                <div data-region="day-content">
';
                $buffer .= $indent . '                                    <ul>
';
                // 'events' section
                $value = $context->find('events');
                $buffer .= $this->section127c720e2e1fbc82e6e6aac5c023f880($context, $indent, $value);
                $buffer .= $indent . '                                    </ul>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section69524324740c4b63b8b428d49728838e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a data-action="view-day-link" href="#" class="day aalink" aria-label="{{viewdaylinktitle}}"
                                    data-year="{{date.year}}" data-month="{{date.mon}}" data-day="{{mday}}"
                                    data-courseid="{{courseid}}" data-categoryid="{{categoryid}}"
                                    data-timestamp="{{timestamp}}">{{mday}}</a>
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
                
                $buffer .= $indent . '                                <a data-action="view-day-link" href="#" class="day aalink" aria-label="';
                $value = $this->resolveValue($context->find('viewdaylinktitle'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                    data-year="';
                $value = $this->resolveValue($context->findDot('date.year'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-month="';
                $value = $this->resolveValue($context->findDot('date.mon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-day="';
                $value = $this->resolveValue($context->find('mday'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                    data-courseid="';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-categoryid="';
                $value = $this->resolveValue($context->find('categoryid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                    data-timestamp="';
                $value = $this->resolveValue($context->find('timestamp'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('mday'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section656b3948a8a4a6bbad35cef28e928f7c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <td class="day text-sm-center text-md-left{{!
                            }}{{#istoday}} today{{/istoday}}{{!
                            }}{{#isweekend}} weekend{{/isweekend}}{{!
                            }}{{#durationevents.0}} duration{{/durationevents.0}}{{!
                            }}{{#durationevents}} duration_{{.}}{{/durationevents}}{{!
                            }}{{#defaulteventcontext}} clickable{{/defaulteventcontext}}{{!
                        }}"
                        data-day-timestamp="{{timestamp}}"
                        data-drop-zone="month-view-day"
                        data-region="day"
                        data-new-event-timestamp="{{neweventtimestamp}}">
                        <div class="d-none d-md-block hidden-phone text-xs-center">
                            <span class="sr-only">{{daytitle}}</span>
                            {{#hasevents}}
                                <a data-action="view-day-link" href="#" class="aalink day" aria-label="{{viewdaylinktitle}}"
                                    data-year="{{date.year}}" data-month="{{date.mon}}" data-day="{{mday}}"
                                    data-courseid="{{courseid}}" data-categoryid="{{categoryid}}"
                                    data-timestamp="{{timestamp}}">{{mday}}</a>
                            {{/hasevents}}
                            {{^hasevents}}
                                <span aria-hidden="true">{{mday}}</span>
                            {{/hasevents}}
                            {{#hasevents}}
                                <div data-region="day-content">
                                    <ul>
                                        {{#events}}
                                        {{#underway}}
                                            <li class="events-underway">[{{{name}}}]</li>
                                        {{/underway}}
                                        {{^underway}}
                                            <li data-region="event-item"
                                                data-event-component="{{component}}"
                                                data-event-eventtype="{{eventtype}}"
                                                data-eventtype-{{normalisedeventtype}}="1"
                                                {{#draggable}}
                                                    draggable="true"
                                                    data-drag-type="move"
                                                    {{#mindaytimestamp}}
                                                        data-min-day-timestamp="{{.}}"
                                                    {{/mindaytimestamp}}
                                                    {{#mindayerror}}
                                                        data-min-day-error="{{.}}"
                                                    {{/mindayerror}}
                                                    {{#maxdaytimestamp}}
                                                        data-max-day-timestamp="{{.}}"
                                                    {{/maxdaytimestamp}}
                                                    {{#maxdayerror}}
                                                        data-max-day-error="{{.}}"
                                                    {{/maxdayerror}}
                                                {{/draggable}}>

                                                <a data-action="view-event" data-event-id="{{id}}" href="{{url}}" title="{{name}}">
                                                    <span class="calendar-circle calendar_event_{{normalisedeventtype}}">
                                                        &nbsp;
                                                    </span>
                                                    {{> core_calendar/event_icon}}
                                                    <span class="eventname">{{{name}}}</span>
                                                </a>
                                            </li>
                                        {{/underway}}
                                        {{/events}}
                                    </ul>
                                </div>
                            {{/hasevents}}
                        </div>
                        <div class="d-md-none hidden-desktop hidden-tablet">
                            <span class="sr-only">{{daytitle}}</span>
                            {{#hasevents}}
                                <a data-action="view-day-link" href="#" class="day aalink" aria-label="{{viewdaylinktitle}}"
                                    data-year="{{date.year}}" data-month="{{date.mon}}" data-day="{{mday}}"
                                    data-courseid="{{courseid}}" data-categoryid="{{categoryid}}"
                                    data-timestamp="{{timestamp}}">{{mday}}</a>
                            {{/hasevents}}
                            {{^hasevents}}
                                <span aria-hidden="true">{{mday}}</span>
                            {{/hasevents}}
                        </div>
                    </td>
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
                
                $buffer .= $indent . '                    <td class="day text-sm-center text-md-left';
                // 'istoday' section
                $value = $context->find('istoday');
                $buffer .= $this->sectionCce61e3fee851e8b66112494c048a58a($context, $indent, $value);
                // 'isweekend' section
                $value = $context->find('isweekend');
                $buffer .= $this->section84f949a8191b4daaac38d5ac1997cd7a($context, $indent, $value);
                // 'durationevents.0' section
                $value = $context->findDot('durationevents.0');
                $buffer .= $this->section8aa9feca8669cbbfdc6a37548f193ebe($context, $indent, $value);
                // 'durationevents' section
                $value = $context->find('durationevents');
                $buffer .= $this->sectionC090550ce065bf0ee1844d93a2f5c5bc($context, $indent, $value);
                // 'defaulteventcontext' section
                $value = $context->find('defaulteventcontext');
                $buffer .= $this->sectionA7cafb8496be54e32a81ab964df17ff2($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        data-day-timestamp="';
                $value = $this->resolveValue($context->find('timestamp'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        data-drop-zone="month-view-day"
';
                $buffer .= $indent . '                        data-region="day"
';
                $buffer .= $indent . '                        data-new-event-timestamp="';
                $value = $this->resolveValue($context->find('neweventtimestamp'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <div class="d-none d-md-block hidden-phone text-xs-center">
';
                $buffer .= $indent . '                            <span class="sr-only">';
                $value = $this->resolveValue($context->find('daytitle'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                // 'hasevents' section
                $value = $context->find('hasevents');
                $buffer .= $this->section9ace4eaa54de4d56088d9017f4fbda7c($context, $indent, $value);
                // 'hasevents' inverted section
                $value = $context->find('hasevents');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                <span aria-hidden="true">';
                    $value = $this->resolveValue($context->find('mday'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</span>
';
                }
                // 'hasevents' section
                $value = $context->find('hasevents');
                $buffer .= $this->sectionE1f66ed595273201676a16720de23a71($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="d-md-none hidden-desktop hidden-tablet">
';
                $buffer .= $indent . '                            <span class="sr-only">';
                $value = $this->resolveValue($context->find('daytitle'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                // 'hasevents' section
                $value = $context->find('hasevents');
                $buffer .= $this->section69524324740c4b63b8b428d49728838e($context, $indent, $value);
                // 'hasevents' inverted section
                $value = $context->find('hasevents');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                <span aria-hidden="true">';
                    $value = $this->resolveValue($context->find('mday'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</span>
';
                }
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section16514953764876ee2feeb234563efdfb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <tr data-region="month-view-week">
                {{#prepadding}}
                    <td class="dayblank">&nbsp;</td>
                {{/prepadding}}
                {{#days}}
                    <td class="day text-sm-center text-md-left{{!
                            }}{{#istoday}} today{{/istoday}}{{!
                            }}{{#isweekend}} weekend{{/isweekend}}{{!
                            }}{{#durationevents.0}} duration{{/durationevents.0}}{{!
                            }}{{#durationevents}} duration_{{.}}{{/durationevents}}{{!
                            }}{{#defaulteventcontext}} clickable{{/defaulteventcontext}}{{!
                        }}"
                        data-day-timestamp="{{timestamp}}"
                        data-drop-zone="month-view-day"
                        data-region="day"
                        data-new-event-timestamp="{{neweventtimestamp}}">
                        <div class="d-none d-md-block hidden-phone text-xs-center">
                            <span class="sr-only">{{daytitle}}</span>
                            {{#hasevents}}
                                <a data-action="view-day-link" href="#" class="aalink day" aria-label="{{viewdaylinktitle}}"
                                    data-year="{{date.year}}" data-month="{{date.mon}}" data-day="{{mday}}"
                                    data-courseid="{{courseid}}" data-categoryid="{{categoryid}}"
                                    data-timestamp="{{timestamp}}">{{mday}}</a>
                            {{/hasevents}}
                            {{^hasevents}}
                                <span aria-hidden="true">{{mday}}</span>
                            {{/hasevents}}
                            {{#hasevents}}
                                <div data-region="day-content">
                                    <ul>
                                        {{#events}}
                                        {{#underway}}
                                            <li class="events-underway">[{{{name}}}]</li>
                                        {{/underway}}
                                        {{^underway}}
                                            <li data-region="event-item"
                                                data-event-component="{{component}}"
                                                data-event-eventtype="{{eventtype}}"
                                                data-eventtype-{{normalisedeventtype}}="1"
                                                {{#draggable}}
                                                    draggable="true"
                                                    data-drag-type="move"
                                                    {{#mindaytimestamp}}
                                                        data-min-day-timestamp="{{.}}"
                                                    {{/mindaytimestamp}}
                                                    {{#mindayerror}}
                                                        data-min-day-error="{{.}}"
                                                    {{/mindayerror}}
                                                    {{#maxdaytimestamp}}
                                                        data-max-day-timestamp="{{.}}"
                                                    {{/maxdaytimestamp}}
                                                    {{#maxdayerror}}
                                                        data-max-day-error="{{.}}"
                                                    {{/maxdayerror}}
                                                {{/draggable}}>

                                                <a data-action="view-event" data-event-id="{{id}}" href="{{url}}" title="{{name}}">
                                                    <span class="calendar-circle calendar_event_{{normalisedeventtype}}">
                                                        &nbsp;
                                                    </span>
                                                    {{> core_calendar/event_icon}}
                                                    <span class="eventname">{{{name}}}</span>
                                                </a>
                                            </li>
                                        {{/underway}}
                                        {{/events}}
                                    </ul>
                                </div>
                            {{/hasevents}}
                        </div>
                        <div class="d-md-none hidden-desktop hidden-tablet">
                            <span class="sr-only">{{daytitle}}</span>
                            {{#hasevents}}
                                <a data-action="view-day-link" href="#" class="day aalink" aria-label="{{viewdaylinktitle}}"
                                    data-year="{{date.year}}" data-month="{{date.mon}}" data-day="{{mday}}"
                                    data-courseid="{{courseid}}" data-categoryid="{{categoryid}}"
                                    data-timestamp="{{timestamp}}">{{mday}}</a>
                            {{/hasevents}}
                            {{^hasevents}}
                                <span aria-hidden="true">{{mday}}</span>
                            {{/hasevents}}
                        </div>
                    </td>
                {{/days}}
                {{#postpadding}}
                    <td class="dayblank">&nbsp;</td>
                {{/postpadding}}
            </tr>
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
                
                $buffer .= $indent . '            <tr data-region="month-view-week">
';
                // 'prepadding' section
                $value = $context->find('prepadding');
                $buffer .= $this->sectionC4c3143ddabc3752a981ecbe10c8372e($context, $indent, $value);
                // 'days' section
                $value = $context->find('days');
                $buffer .= $this->section656b3948a8a4a6bbad35cef28e928f7c($context, $indent, $value);
                // 'postpadding' section
                $value = $context->find('postpadding');
                $buffer .= $this->sectionC4c3143ddabc3752a981ecbe10c8372e($context, $indent, $value);
                $buffer .= $indent . '            </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section97d01b713e00bfce873b563637877bf4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([
    \'jquery\',
    \'core_calendar/month_view_drag_drop\',
    \'core_calendar/selectors\',
    \'core_calendar/events\',
], function(
    $,
    DragDrop,
    CalendarSelectors,
    CalendarEvents
) {
    var root = $(\'#month-detailed-{{uniqid}}\');
    DragDrop.init(root);

    $(\'body\').on(CalendarEvents.filterChanged, function(e, data) {
        M.util.js_pending("month-detailed-{{uniqid}}-filterChanged");
        // A filter value has been changed.
        // Find all matching cells in the popover data, and hide them.
        var target = $("#month-detailed-{{uniqid}}").find(CalendarSelectors.eventType[data.type]);

        var transitionPromise = $.Deferred();
        if (data.hidden) {
            transitionPromise.then(function() {
                return target.slideUp(\'fast\').promise();
            });
        } else {
            transitionPromise.then(function() {
                return target.slideDown(\'fast\').promise();
            });
        }

        transitionPromise.then(function() {
            M.util.js_complete("month-detailed-{{uniqid}}-filterChanged");

            return;
        });

        transitionPromise.resolve();
    });
});
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
                
                $buffer .= $indent . 'require([
';
                $buffer .= $indent . '    \'jquery\',
';
                $buffer .= $indent . '    \'core_calendar/month_view_drag_drop\',
';
                $buffer .= $indent . '    \'core_calendar/selectors\',
';
                $buffer .= $indent . '    \'core_calendar/events\',
';
                $buffer .= $indent . '], function(
';
                $buffer .= $indent . '    $,
';
                $buffer .= $indent . '    DragDrop,
';
                $buffer .= $indent . '    CalendarSelectors,
';
                $buffer .= $indent . '    CalendarEvents
';
                $buffer .= $indent . ') {
';
                $buffer .= $indent . '    var root = $(\'#month-detailed-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\');
';
                $buffer .= $indent . '    DragDrop.init(root);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'body\').on(CalendarEvents.filterChanged, function(e, data) {
';
                $buffer .= $indent . '        M.util.js_pending("month-detailed-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-filterChanged");
';
                $buffer .= $indent . '        // A filter value has been changed.
';
                $buffer .= $indent . '        // Find all matching cells in the popover data, and hide them.
';
                $buffer .= $indent . '        var target = $("#month-detailed-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '").find(CalendarSelectors.eventType[data.type]);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        var transitionPromise = $.Deferred();
';
                $buffer .= $indent . '        if (data.hidden) {
';
                $buffer .= $indent . '            transitionPromise.then(function() {
';
                $buffer .= $indent . '                return target.slideUp(\'fast\').promise();
';
                $buffer .= $indent . '            });
';
                $buffer .= $indent . '        } else {
';
                $buffer .= $indent . '            transitionPromise.then(function() {
';
                $buffer .= $indent . '                return target.slideDown(\'fast\').promise();
';
                $buffer .= $indent . '            });
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        transitionPromise.then(function() {
';
                $buffer .= $indent . '            M.util.js_complete("month-detailed-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-filterChanged");
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            return;
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        transitionPromise.resolve();
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
