import React, { useState, useEffect } from "react";
import { Avatar, Button, Space, Table, Typography } from "antd";
const { Text } = Typography;
import PageActions from "@/shared/components/page-actions";
import { Link } from "@inertiajs/react";
import { dateTimeFormatter } from "@/helpers/formatter";
import Filters from "@/shared/roi/filters";

const Index = (props) => {
    const { data, isLoading } = props;

    const columns = [
        {
            title: 'Day',
            key: 'account_id',
            sorter: (a, b) => a.account_id - b.account_id,
            render: (record) => (
                <span>{dateTimeFormatter(record?.last_updated_ts)}</span>
            )
        },
        {
            title: '# Adsets',
            dataIndex: 'account_name',
            sorter: (a, b) => a.account_name - b.account_name,
            key: 'account_name',
        },
        {
            title: '#No delivery',
            key: 'last_updated_ts',
            sorter: (a, b) => a.last_updated_ts - b.last_updated_ts,
            render: (record) => (
                <span>{dateTimeFormatter(record?.last_updated_ts)}</span>
            )
        }, 
        {
            title: '% No delivery',
            key: 'Revenue',
            sorter: (a, b) => a.last_updated_ts - b.last_updated_ts,
            align: "right",
            render: (record) => (
                <span>{dateTimeFormatter(record?.last_updated_ts)}</span>
            )
        }, 
        {
            title: '#Positives',
            key: 'spend',
            align: "right",
            sorter: (a, b) => a.last_updated_ts - b.last_updated_ts,
            render: (record) => (
                <span>{dateTimeFormatter(record?.last_updated_ts)}</span>
            )
        },
        {
            title: '% Positives',
            key: 'profit',
            align: "right",
            sorter: (a, b) => a.last_updated_ts - b.last_updated_ts,
            render: (record) => (
                <span>{dateTimeFormatter(record?.last_updated_ts)}</span>
            )
        }
    ];


    return (
        <div className="page">
            <PageActions title="Daily hourly ROI trends" subtitle="Paste here one or more adset id (one per row)">
                <Filters/>
                </PageActions>
            <div className="page-content">
                <h1>Daily summary</h1>
            <Table
                        columns={columns}
                        dataSource={[]}
                        loading={isLoading}
                        rowKey="id"
                        pagination={{
                            pageSize: 50,
                        }}
                    />  

        </div>
        </div>
    );
};

export default Index;
