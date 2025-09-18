import React from "react";
import { Row, Col, Form, Input, Button, Select, InputNumber } from "antd";
import SelectAccount from "@/shared/form-fields/select-account";
import SelectSocial from "../form-fields/select-social";
import { IconSearch } from "@tabler/icons-react";

const Filters = () => {

    return (
        <section className="mb-3">
            <Row>
                <Col span={24}>
                    <Form layout="inline">
                    <Form.Item label="Filter by account">
                        <SelectAccount/>
                    </Form.Item> 
                    <Form.Item label="Filter by platform">
                        <SelectSocial/>
                    </Form.Item>
                    <Form.Item label="Filter by timezone">
                    <SelectSocial/>
                    </Form.Item>
                    <Form.Item label="Filter by adset id">
                        <Input placeholder="input placeholder" allowClear/>
                    </Form.Item> 
                    <Form.Item label="Query">
                        <Input placeholder="input placeholder" allowClear/>
                    </Form.Item>
                    <Form.Item>
                        <Button type="primary" icon={<IconSearch/>}>Filter</Button>
                    </Form.Item>
                </Form>
            </Col>
        </Row>
        </section >
    );
};

export default Filters;