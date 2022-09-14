<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20170714\Models;

use AlibabaCloud\Tea\Model;

class SubmitJobRequest extends Model
{
    /**
     * @var string
     */
    public $arrayRequest;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $commandLine;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $packagePath;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var bool
     */
    public $reRunable;

    /**
     * @var string
     */
    public $runasUser;

    /**
     * @var string
     */
    public $runasUserPassword;

    /**
     * @var string
     */
    public $stderrRedirectPath;

    /**
     * @var string
     */
    public $stdoutRedirectPath;

    /**
     * @var string
     */
    public $variables;
    protected $_name = [
        'arrayRequest'       => 'ArrayRequest',
        'clusterId'          => 'ClusterId',
        'commandLine'        => 'CommandLine',
        'name'               => 'Name',
        'packagePath'        => 'PackagePath',
        'priority'           => 'Priority',
        'reRunable'          => 'ReRunable',
        'runasUser'          => 'RunasUser',
        'runasUserPassword'  => 'RunasUserPassword',
        'stderrRedirectPath' => 'StderrRedirectPath',
        'stdoutRedirectPath' => 'StdoutRedirectPath',
        'variables'          => 'Variables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrayRequest) {
            $res['ArrayRequest'] = $this->arrayRequest;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->commandLine) {
            $res['CommandLine'] = $this->commandLine;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->packagePath) {
            $res['PackagePath'] = $this->packagePath;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->reRunable) {
            $res['ReRunable'] = $this->reRunable;
        }
        if (null !== $this->runasUser) {
            $res['RunasUser'] = $this->runasUser;
        }
        if (null !== $this->runasUserPassword) {
            $res['RunasUserPassword'] = $this->runasUserPassword;
        }
        if (null !== $this->stderrRedirectPath) {
            $res['StderrRedirectPath'] = $this->stderrRedirectPath;
        }
        if (null !== $this->stdoutRedirectPath) {
            $res['StdoutRedirectPath'] = $this->stdoutRedirectPath;
        }
        if (null !== $this->variables) {
            $res['Variables'] = $this->variables;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArrayRequest'])) {
            $model->arrayRequest = $map['ArrayRequest'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CommandLine'])) {
            $model->commandLine = $map['CommandLine'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PackagePath'])) {
            $model->packagePath = $map['PackagePath'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ReRunable'])) {
            $model->reRunable = $map['ReRunable'];
        }
        if (isset($map['RunasUser'])) {
            $model->runasUser = $map['RunasUser'];
        }
        if (isset($map['RunasUserPassword'])) {
            $model->runasUserPassword = $map['RunasUserPassword'];
        }
        if (isset($map['StderrRedirectPath'])) {
            $model->stderrRedirectPath = $map['StderrRedirectPath'];
        }
        if (isset($map['StdoutRedirectPath'])) {
            $model->stdoutRedirectPath = $map['StdoutRedirectPath'];
        }
        if (isset($map['Variables'])) {
            $model->variables = $map['Variables'];
        }

        return $model;
    }
}
