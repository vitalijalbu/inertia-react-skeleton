import React, { useState, useEffect } from "react";
import { Row, Col, Card, Button, Avatar, Typography, List, Tag, Statistic } from "antd";
const { Text, Title } = Typography;
const { Meta } = Card;
import PageActions from "@/shared/components/page-actions";
import {
    IconCompass,
    Icon123,
    IconActivity,
    IconUserCircle,
    IconMoneybag,
} from "@tabler/icons-react";
import { Link } from "@inertiajs/react";
import ChartComponent from "../../shared/accounts/chart";



const View = (props) => {
    const { data } = props;

    console.log("Account view props", props);

    const details = [
        {
            icon: <IconMoneybag />,
            label: 'Total spend',
            value: 10,
        },
        {
            icon: <IconMoneybag />,
            label: 'Total revenue',
            value: 20,
        },
        {
            icon: <IconMoneybag />,
            label: 'Total profit',
            value: 100,
        },
    ];

    return (
        <div className="page">
            <PageActions
                backUrl="/accounts"
                title={`Details account ${data.account_id}`}
                subTitle={data.account_name} />
            <div className="page-content">
                <div className="container">
                    <Row gutter={[16, 16]}>
                    {details.map((item, i) => (
                    <Col span={8} key={i}>
                        <Card>
                            <Statistic title={item.label} value={item.value} />
                        </Card>
                        </Col>
                    ))}
                        <Col span={24}>
                            <Card title="Overview" >
                                <ChartComponent data={data.json_data} />
                            </Card>
                        </Col>
                    </Row>
                </div>
            </div>
        </div>
    );
};

export default View;
