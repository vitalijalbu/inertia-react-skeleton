import React, { useState, useEffect } from "react";
import { Avatar, Button, Card, Col, Row, Space, Statistic, Table, Typography } from "antd";
const { Text } = Typography;
import PageActions from "@/shared/components/page-actions";
import { Link } from "@inertiajs/react";
import { dateTimeFormatter } from "@/helpers/formatter";
import { IconUserFilled } from "@tabler/icons-react";
import Filters from "@/shared/accounts/filters";

const Accounts = (props) => {
    const { data, isLoading } = props;
    //const [isLoading, setIsLoading] = useState(true);
    console.log("Accounts props", props);

    const columns = [
        {
            title: 'Account ID',
            key: 'account_id',
            sorter: (a, b) => a.account_id - b.account_id,
            render: (record) => (
                <Link href={`/accounts/${record?.account_id}`}>
                    <Space>
                        <Avatar size="small" shape="square"><IconUserFilled/></Avatar>
                    {record?.account_id}
                    </Space>
                    </Link>
            )
        },
        {
            title: 'Account name',
            dataIndex: 'account_name',
            sorter: (a, b) => a.account_name - b.account_name,
            key: 'account_name',
        },
        {
            title: 'Last update (Europe/Rome)',
            key: 'last_updated_ts',
            sorter: (a, b) => a.last_updated_ts - b.last_updated_ts,
            render: (record) => (
                <span>{dateTimeFormatter(record?.last_updated_ts)}</span>
            )
        }, 
        {
            title: 'Revenue',
            key: 'revenue',
            sorter: (a, b) => a.revenue - b.revenue,
            align: "right",
            render: ({revenue}) => (
                <span>{revenue}</span>
            )
        }, 
        {
            title: 'Spend',
            key: 'spend',
            align: "right",
            sorter: (a, b) => a.spend - b.spend,
            render: ({spend}) => (
                <span>{spend}</span>
            )
        },
        {
            title: 'Profit',
            key: 'profit',
            align: "right",
            sorter: (a, b) => a.profit - b.profit,
            render: ({profit}) => (
                <span>{profit}</span>
            )
        },
        {
            title: "Actions",
            key: "actions",
            align: "right",
            render: (record) => (
                    <Space.Compact>
                        <Button><Link href={`/accounts/${record?.account_id}`}>View</Link></Button>
                        <Button><Link href={`/adsets/${record?.account_id}`}>Adsets</Link></Button>
                    </Space.Compact>
            )
        }
    ];

    return (
        <div className="page">
            <PageActions title="Best by profits" />
            <div className="page-content">
            <Row gutter={[16, 16]}>
                    <Col span={8} key={1}>
                        <Card>
                            <Statistic title="Total revenue" value={11} />
                        </Card>
                        </Col>
                        <Col span={8} key={1}>
                        <Card>
                            <Statistic title="Total spend" value={12} />
                        </Card>
                        </Col>
                        </Row>
                    <Filters/>
                    <Table
                    virtual
                        columns={columns}
                        dataSource={data?.data}
                        loading={isLoading}
                        pagination={{
                            pageSize: 50,
                        }}
                    />
            </div>
        </div>
    );
};

export default Accounts;
