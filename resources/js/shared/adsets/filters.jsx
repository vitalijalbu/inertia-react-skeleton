import React from "react";
import { Row, Col, Form, Input, Button, Select, InputNumber } from "antd";
import { IconSearch } from "@tabler/icons-react";
import { socialMedia } from "@/data/index";
import SelectAccount from "@/shared/form-fields/select-account";

const Filters = () => {

    return (
        <section className="mb-3">
            <Row>
                <Col span={24}>
                    <Form layout="inline">
                    <Form.Item label="Field B">
                    <Select
                            mode="multiple"
                            placeholder="Please select"
                            defaultValue={['a10', 'c12']}
                            style={{
                                width: '100%',
                            }}
                            options={[]}
                            />
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