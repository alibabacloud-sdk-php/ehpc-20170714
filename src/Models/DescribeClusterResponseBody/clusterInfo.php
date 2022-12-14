<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20170714\Models\DescribeClusterResponseBody;

use AlibabaCloud\SDK\EHPC\V20170714\Models\DescribeClusterResponseBody\clusterInfo\applications;
use AlibabaCloud\SDK\EHPC\V20170714\Models\DescribeClusterResponseBody\clusterInfo\ecsInfo;
use AlibabaCloud\Tea\Model;

class clusterInfo extends Model
{
    /**
     * @var string
     */
    public $accountType;

    /**
     * @var applications
     */
    public $applications;

    /**
     * @var string
     */
    public $clientVersion;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ecsChargeType;

    /**
     * @var ecsInfo
     */
    public $ecsInfo;

    /**
     * @var bool
     */
    public $haEnable;

    /**
     * @var string
     */
    public $id;

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
    public $regionId;

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
    public $status;

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
    protected $_name = [
        'accountType'      => 'AccountType',
        'applications'     => 'Applications',
        'clientVersion'    => 'ClientVersion',
        'createTime'       => 'CreateTime',
        'description'      => 'Description',
        'ecsChargeType'    => 'EcsChargeType',
        'ecsInfo'          => 'EcsInfo',
        'haEnable'         => 'HaEnable',
        'id'               => 'Id',
        'imageId'          => 'ImageId',
        'imageOwnerAlias'  => 'ImageOwnerAlias',
        'keyPairName'      => 'KeyPairName',
        'name'             => 'Name',
        'osTag'            => 'OsTag',
        'regionId'         => 'RegionId',
        'remoteDirectory'  => 'RemoteDirectory',
        'sccClusterId'     => 'SccClusterId',
        'schedulerType'    => 'SchedulerType',
        'securityGroupId'  => 'SecurityGroupId',
        'status'           => 'Status',
        'vSwitchId'        => 'VSwitchId',
        'volumeId'         => 'VolumeId',
        'volumeMountpoint' => 'VolumeMountpoint',
        'volumeProtocol'   => 'VolumeProtocol',
        'volumeType'       => 'VolumeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->applications) {
            $res['Applications'] = null !== $this->applications ? $this->applications->toMap() : null;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ecsChargeType) {
            $res['EcsChargeType'] = $this->ecsChargeType;
        }
        if (null !== $this->ecsInfo) {
            $res['EcsInfo'] = null !== $this->ecsInfo ? $this->ecsInfo->toMap() : null;
        }
        if (null !== $this->haEnable) {
            $res['HaEnable'] = $this->haEnable;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['Applications'])) {
            $model->applications = applications::fromMap($map['Applications']);
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EcsChargeType'])) {
            $model->ecsChargeType = $map['EcsChargeType'];
        }
        if (isset($map['EcsInfo'])) {
            $model->ecsInfo = ecsInfo::fromMap($map['EcsInfo']);
        }
        if (isset($map['HaEnable'])) {
            $model->haEnable = $map['HaEnable'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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

        return $model;
    }
}
