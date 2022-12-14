<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20170714\Models;

use AlibabaCloud\SDK\EHPC\V20170714\Models\CreateClusterRequest\application;
use AlibabaCloud\SDK\EHPC\V20170714\Models\CreateClusterRequest\ecsOrder;
use AlibabaCloud\Tea\Model;

class CreateClusterRequest extends Model
{
    /**
     * @var ecsOrder
     */
    public $ecsOrder;

    /**
     * @var string
     */
    public $accountType;

    /**
     * @var application[]
     */
    public $application;

    /**
     * @var string
     */
    public $computeSpotPriceLimit;

    /**
     * @var string
     */
    public $computeSpotStrategy;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ecsChargeType;

    /**
     * @var string
     */
    public $ehpcVersion;

    /**
     * @var bool
     */
    public $haEnable;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $osTag;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $remoteDirectory;

    /**
     * @var string
     */
    public $sccClusterId;

    /**
     * @var string
     */
    public $schedulerType;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $securityGroupName;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $volumeId;

    /**
     * @var string
     */
    public $volumeMountpoint;

    /**
     * @var string
     */
    public $volumeProtocol;

    /**
     * @var string
     */
    public $volumeType;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'ecsOrder'              => 'EcsOrder',
        'accountType'           => 'AccountType',
        'application'           => 'Application',
        'computeSpotPriceLimit' => 'ComputeSpotPriceLimit',
        'computeSpotStrategy'   => 'ComputeSpotStrategy',
        'description'           => 'Description',
        'ecsChargeType'         => 'EcsChargeType',
        'ehpcVersion'           => 'EhpcVersion',
        'haEnable'              => 'HaEnable',
        'imageId'               => 'ImageId',
        'imageOwnerAlias'       => 'ImageOwnerAlias',
        'keyPairName'           => 'KeyPairName',
        'name'                  => 'Name',
        'osTag'                 => 'OsTag',
        'password'              => 'Password',
        'remoteDirectory'       => 'RemoteDirectory',
        'sccClusterId'          => 'SccClusterId',
        'schedulerType'         => 'SchedulerType',
        'securityGroupId'       => 'SecurityGroupId',
        'securityGroupName'     => 'SecurityGroupName',
        'vSwitchId'             => 'VSwitchId',
        'volumeId'              => 'VolumeId',
        'volumeMountpoint'      => 'VolumeMountpoint',
        'volumeProtocol'        => 'VolumeProtocol',
        'volumeType'            => 'VolumeType',
        'vpcId'                 => 'VpcId',
        'zoneId'                => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsOrder) {
            $res['EcsOrder'] = null !== $this->ecsOrder ? $this->ecsOrder->toMap() : null;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->application) {
            $res['Application'] = [];
            if (null !== $this->application && \is_array($this->application)) {
                $n = 0;
                foreach ($this->application as $item) {
                    $res['Application'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->computeSpotPriceLimit) {
            $res['ComputeSpotPriceLimit'] = $this->computeSpotPriceLimit;
        }
        if (null !== $this->computeSpotStrategy) {
            $res['ComputeSpotStrategy'] = $this->computeSpotStrategy;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ecsChargeType) {
            $res['EcsChargeType'] = $this->ecsChargeType;
        }
        if (null !== $this->ehpcVersion) {
            $res['EhpcVersion'] = $this->ehpcVersion;
        }
        if (null !== $this->haEnable) {
            $res['HaEnable'] = $this->haEnable;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->osTag) {
            $res['OsTag'] = $this->osTag;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->remoteDirectory) {
            $res['RemoteDirectory'] = $this->remoteDirectory;
        }
        if (null !== $this->sccClusterId) {
            $res['SccClusterId'] = $this->sccClusterId;
        }
        if (null !== $this->schedulerType) {
            $res['SchedulerType'] = $this->schedulerType;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->volumeId) {
            $res['VolumeId'] = $this->volumeId;
        }
        if (null !== $this->volumeMountpoint) {
            $res['VolumeMountpoint'] = $this->volumeMountpoint;
        }
        if (null !== $this->volumeProtocol) {
            $res['VolumeProtocol'] = $this->volumeProtocol;
        }
        if (null !== $this->volumeType) {
            $res['VolumeType'] = $this->volumeType;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsOrder'])) {
            $model->ecsOrder = ecsOrder::fromMap($map['EcsOrder']);
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['Application'])) {
            if (!empty($map['Application'])) {
                $model->application = [];
                $n                  = 0;
                foreach ($map['Application'] as $item) {
                    $model->application[$n++] = null !== $item ? application::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ComputeSpotPriceLimit'])) {
            $model->computeSpotPriceLimit = $map['ComputeSpotPriceLimit'];
        }
        if (isset($map['ComputeSpotStrategy'])) {
            $model->computeSpotStrategy = $map['ComputeSpotStrategy'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EcsChargeType'])) {
            $model->ecsChargeType = $map['EcsChargeType'];
        }
        if (isset($map['EhpcVersion'])) {
            $model->ehpcVersion = $map['EhpcVersion'];
        }
        if (isset($map['HaEnable'])) {
            $model->haEnable = $map['HaEnable'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OsTag'])) {
            $model->osTag = $map['OsTag'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['RemoteDirectory'])) {
            $model->remoteDirectory = $map['RemoteDirectory'];
        }
        if (isset($map['SccClusterId'])) {
            $model->sccClusterId = $map['SccClusterId'];
        }
        if (isset($map['SchedulerType'])) {
            $model->schedulerType = $map['SchedulerType'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VolumeId'])) {
            $model->volumeId = $map['VolumeId'];
        }
        if (isset($map['VolumeMountpoint'])) {
            $model->volumeMountpoint = $map['VolumeMountpoint'];
        }
        if (isset($map['VolumeProtocol'])) {
            $model->volumeProtocol = $map['VolumeProtocol'];
        }
        if (isset($map['VolumeType'])) {
            $model->volumeType = $map['VolumeType'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
